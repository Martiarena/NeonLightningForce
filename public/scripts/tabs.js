document.querySelectorAll('[data-tabs]').forEach(tabs => {
    const buttons = tabs.querySelectorAll('.tab');
    const panels = tabs.querySelectorAll('.tab-personajes-panel');

    buttons.forEach(btn => {
        btn.addEventListener('click', () => {
            const target = btn.dataset.tab;

            buttons.forEach(b => b.classList.remove('activo'));
            panels.forEach(p => p.classList.remove('activo'));

            btn.classList.add('activo');
            tabs.querySelector(`#${target}`).classList.add('activo');
        });
    });
});