import naja from "naja";

$('.click').on('click', () => {
    //console.log($(this).data('url'));
    naja.makeRequest('GET', '/?do=ajax');
})

naja.addEventListener('success', (event) => {
    console.log(event.detail.payload);
})