
window.addEventListener('click', function (event) {

    if(event.target.dataset.action === 'mminus'){
        const info = event.target.closest('.product');
        const id = info.querySelector('[data-id]').innerText
        $.ajax({
            type: "GET",
            url: "quantity.php",
            data:{
                id:id,
                minus:'minus'
            },
            success:function(){
                location.reload();
            }
        })
    }

    if(event.target.dataset.action === 'pplus'){
        const info = event.target.closest('.product');
        const id = info.querySelector('[data-id]').innerText
        $.ajax({
            type: "GET",
            url: "quantity.php",
            data:{
                id:id,
                plus:'plus'
            },
            success:function(){
                location.reload();
            }
        })
    }
})

/////////////////////////////////////////////////////////////////////////////

$('#number').on('input', function(){
    this.value = this.value.replace(/[^0-9]/g, '');
});




