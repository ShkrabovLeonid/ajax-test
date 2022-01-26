export default function sendForm({selector}) {
    const formInputs = document.querySelector(selector);
    const submitButton = formInputs.querySelector('button');
    submitButton.addEventListener('click', async (e) => {
        e.preventDefault();
        const data = new FormData(formInputs);
        try {
            const res = await fetch(`${window.location.origin}/server/`, {
                method: 'POST',
                body: data
            });
            if (res.ok && res.status === 200) {
                console.log(await res.text())
            } else {
                console.error(`Error. Status: ${res.status}`);
            }
        } catch (e) {
            console.error(e);
        }
    });
}