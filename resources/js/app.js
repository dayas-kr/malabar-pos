import "./bootstrap";

import Alpine from "alpinejs";
import anchor from "@alpinejs/anchor";
import focus from "@alpinejs/focus";
import theme from "./theme";

Alpine.plugin(anchor);
Alpine.plugin(focus);
window.Alpine = Alpine;

Alpine.store("theme", theme);

Alpine.start();
