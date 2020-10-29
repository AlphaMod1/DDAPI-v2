try {
    document.querySelector('#reset').addEventListener('click', () => {
        document.querySelector('#username-f').value = '';
        document.querySelector('#password-f').value = '';
        document.querySelector('#conf-password-f').value = '';
    })
} catch (error) {
    //nothing
}
