const url = window.location.href;

if (url.includes('?erro')) {
    const erro = document.getElementById('erro')
    erro.style.display = 'block';
}