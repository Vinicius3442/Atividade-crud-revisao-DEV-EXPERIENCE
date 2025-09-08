document.addEventListener("DOMContentLoaded", () => {
    const body = document.body;

    for (let i = 0; i < 30; i++) {
        let sparkle = document.createElement("div");
        sparkle.classList.add("sparkle");
        sparkle.style.left = Math.random() * 100 + "vw";
        sparkle.style.top = Math.random() * 100 + "vh";
        sparkle.style.animationDuration = 2 + Math.random() * 3 + "s";
        body.appendChild(sparkle);
    }
});


const style = document.createElement("style");
style.innerHTML = `
    .sparkle {
        position: fixed;
        width: 5px;
        height: 5px;
        background: #ffffffff;
        border-radius: 50%;
        opacity: 0.8;
        filter: blur(): 10px;
        animation: float 5s linear infinite;
    }
    @keyframes float {
        0% { transform: translateY(0) scale(1); opacity: 1; }
        50% { transform: translateY(-20px) scale(1.2); opacity: 0.6; }
        100% { transform: translateY(0) scale(1); opacity: 1; }
    }
`;
document.head.appendChild(style);
