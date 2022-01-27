export default function sendForm({selector}) {
    const form = document.querySelector(selector),
        submitButton = form.querySelector('button'),
        messages = form.querySelector('.form-messages');
    if (!form) {
        console.error(`Error. No selector`);
        return;
    }
    submitButton?.addEventListener('click', async (e) => {
        e.preventDefault();
        submitButton.disabled = true;
        const data = new FormData(form),
            checkboxs = form.querySelectorAll('input[type=checkbox]');

        checkboxs.forEach((checkbox) => {
            if (!data.has(checkbox.name)) {
                data.append(checkbox.name, 0);
            }
        });
        try {
            const res = await fetch(`${window.location.href}server/`, {
                method: 'POST',
                body: data
            });
            if (res.ok && res.status === 200) {
                const data = await res.json();
                const html = `
                <ul>
                    ${data['messages'].map((item) => {
                    return `<li>${item}</li>`;
                }).join('')}
                </ul>
                `;
                messages.insertAdjacentHTML('afterbegin', html);
                setTimeout(() => messages.firstElementChild.remove(), 3500);
                if (data['status']) {
                    form.reset();
                }
            } else {
                console.error(`Error. Status: ${res.status}`);
            }
        } catch (e) {
            console.error(e);
        } finally {
            submitButton.disabled = false;
        }
    });
}