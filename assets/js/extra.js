import './extra.scss';

const container = document.querySelector('.container');
const heading = document.querySelector('[data-split]');

const transformEl = (char) => {
    const el = document.createElement('span');
    el.textContent = char;
    return el;
};

heading.replaceChildren(...[...heading.textContent].map(transformEl));

container.addEventListener('mousemove', (e) => {
    for (const c of heading.children) {
        const fromCenterX = c.offsetWidth / 2 - (e.clientX - c.offsetLeft);
        const fromCenterY = c.offsetHeight / 2 - (e.clientY - c.offsetTop);
        const fromCenter = Math.floor(
            Math.sqrt(Math.pow(fromCenterX, 2) + Math.pow(fromCenterY, 2)),
        );

        c.style.setProperty(
            '--opacity',
            fromCenter > 100 ? 20 : 100 - fromCenter < 20 ? 20 : 100 - fromCenter,
        );
    }
});

container.addEventListener('mouseleave', () => {
    for (const c of heading.children) {
        c.style.setProperty('--opacity', 20);
    }
});