export default {
    value: localStorage.theme || "system",

    apply() {
        const m = matchMedia("(prefers-color-scheme: dark)");
        const cls =
            this.value === "system"
                ? m.matches
                    ? "dark"
                    : "light"
                : this.value;

        document.documentElement.className = cls;
        document.documentElement.dataset.theme = cls;
    },

    set(val) {
        this.value = val;
        localStorage.theme = val;
        this.apply();
    },

    init() {
        this.apply();

        matchMedia("(prefers-color-scheme: dark)").addEventListener(
            "change",
            () => {
                if (this.value === "system") this.apply();
            },
        );

        window.addEventListener("storage", (e) => {
            if (e.key === "theme") {
                this.value = e.newValue || "system";
                this.apply();
            }
        });
    },
};
