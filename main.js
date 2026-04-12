(function () {
    "use strict";

    var navToggle = document.querySelector(".nav-toggle");
    var siteNav = document.querySelector(".site-nav");
    var navLinks = siteNav ? siteNav.querySelectorAll("a[href^='#']") : [];

    function setNavOpen(open) {
        if (!navToggle || !siteNav) return;
        navToggle.setAttribute("aria-expanded", open ? "true" : "false");
        siteNav.classList.toggle("is-open", open);
        document.body.style.overflow = open ? "hidden" : "";
    }

    if (navToggle && siteNav) {
        navToggle.addEventListener("click", function () {
            var open = navToggle.getAttribute("aria-expanded") === "true";
            setNavOpen(!open);
        });

        navLinks.forEach(function (link) {
            link.addEventListener("click", function () {
                setNavOpen(false);
            });
        });

        document.addEventListener("keydown", function (e) {
            if (e.key === "Escape") setNavOpen(false);
        });
    }

    /* About tabs */
    var tabs = document.querySelectorAll(".tab[data-tab]");
    var panels = {
        mission: document.getElementById("panel-mission"),
        strategy: document.getElementById("panel-strategy"),
        vision: document.getElementById("panel-vision"),
    };

    function showTab(name) {
        Object.keys(panels).forEach(function (key) {
            var el = panels[key];
            if (!el) return;
            var on = key === name;
            el.classList.toggle("is-visible", on);
            el.hidden = !on;
        });
        tabs.forEach(function (btn) {
            var active = btn.getAttribute("data-tab") === name;
            btn.classList.toggle("is-active", active);
            btn.setAttribute("aria-selected", active ? "true" : "false");
        });
    }

    tabs.forEach(function (tab) {
        tab.addEventListener("click", function () {
            var name = tab.getAttribute("data-tab");
            if (name) showTab(name);
        });
    });

    /* Forms — demo only */
    var leadForm = document.getElementById("lead-form");
    if (leadForm) {
        leadForm.addEventListener("submit", function (e) {
            e.preventDefault();
            if (!leadForm.reportValidity()) return;
            alert("Thanks — this is a static demo. Connect the form to your backend or a form service.");
        });
    }

    var newsletterForm = document.getElementById("newsletter-form");
    if (newsletterForm) {
        newsletterForm.addEventListener("submit", function (e) {
            e.preventDefault();
            if (!newsletterForm.reportValidity()) return;
            alert("Thanks for subscribing — hook this up to your mailing provider.");
            newsletterForm.reset();
        });
    }

    var yearEl = document.getElementById("year");
    if (yearEl) yearEl.textContent = String(new Date().getFullYear());
})();
