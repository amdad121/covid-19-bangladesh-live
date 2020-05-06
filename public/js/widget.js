el = document.getElementById("containerElem")
if (el) {
    document.addEventListener("DOMContentLoaded", e => {
        function t() {
            if (!this.paused) {
                const e = s.querySelector(".list__item:first-child");
                let t = e.getBoundingClientRect().right;
                parseInt(t) == parseInt(d) && (i = 4, s.appendChild(e)), s.style.marginLeft = `${i}px`, i--
            }
        }
        document.getElementsByClassName("list__item");
        const n = document.getElementById("containerElem"),
            d = n.getBoundingClientRect().left,
            s = document.getElementById("list");
        let i = 0;
        this.paused = !1, window.setInterval(t, 15)
    }), document.getElementById("list").addEventListener("mouseover", () => { this.paused = !0 }, !1), document.getElementById("list").addEventListener("mouseout", () => { this.paused = !1 }, !1);
}