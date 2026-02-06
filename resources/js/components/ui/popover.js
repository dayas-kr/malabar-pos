import { nanoid } from "nanoid";

export default () => ({
    open: false,
    _id: null,
    _trigger: null,
    _content: null,

    togglePopover() {
        this.open = !this.open;
    },

    openPopover() {
        this.open = true;
    },

    closePopover() {
        this.open = false;
    },

    handleDispatch(event, action) {
        if (event.detail?.id !== this._id) {
            this.handleError(
                "The dispatched event ID does not match this popover instance.",
            );
            return;
        }

        const actions = {
            open: this.openPopover,
            close: this.closePopover,
            toggle: this.togglePopover,
        };

        actions[action]?.call(this);
    },

    init() {
        if (!this.initialValidation()) return;
        this.setupAnchor();
        this.setupContentWidth();
    },

    initialValidation() {
        const root = this.$root;

        const triggerContainer = root.querySelector(
            '[data-slot="popover-trigger-container"]',
        );

        if (!triggerContainer) {
            this.handleError(
                "Popover trigger container is missing. Expected: [data-slot='popover-trigger-container']",
            );
            return false;
        }

        let trigger = triggerContainer.querySelector("button");

        if (!trigger) {
            this.handleError(
                "Popover trigger is missing. Expected: [data-slot='popover-trigger']",
            );
            return false;
        }

        if (!trigger.id) trigger.id = `popover-trigger-${nanoid(6)}`;

        if (!trigger.hasAttribute("data-slot")) {
            trigger.setAttribute("data-slot", "popover-trigger");
        }

        this._trigger = trigger;

        const content = root.querySelector('[data-slot="popover-content"]');

        if (!content) {
            this.handleError(
                "Popover content is missing. Expected: [data-slot='popover-content']",
            );
            return false;
        }

        this._content = content;

        this._id = root.id || null;

        return true;
    },

    setupAnchor() {
        const root = this.$root;
        const trigger = this._trigger;
        const content = this._content;

        trigger.addEventListener("click", () => this.togglePopover());

        const position = this.getPopoverPosition(root.dataset.position);
        const offset = this.getPopoverOffset(root.dataset.offset);

        content.setAttribute(
            `x-anchor.${position}.offset.${offset}`,
            `document.getElementById('${trigger.id}')`,
        );
    },

    setupContentWidth() {
        this._content.style.minWidth = `${this._trigger.getBoundingClientRect().width}px`;
    },

    getPopoverPosition(pos) {
        const allowed = new Set([
            "bottom",
            "bottom-start",
            "bottom-end",
            "top",
            "top-start",
            "top-end",
            "left",
            "left-start",
            "left-end",
            "right",
            "right-start",
            "right-end",
        ]);

        const p = (pos || "bottom").toString().trim();
        return allowed.has(p) ? p : "bottom";
    },

    getPopoverOffset(offset) {
        const n = Number(offset);
        return Number.isFinite(n) ? n : 4;
    },

    handleError(message) {
        console.error(`Error in Popover:`, message);
    },
});
