<template>
    <div class="container">
        <div class="main_block">
        <div class="avito f">
            <img src="/public/img/hata.png" alt="" class="img_avito">
            <div class="avito_descr"><span class="type_room">Квартира-студия 46 м2 </span><br>
                <span class="district">р-н Скеллиге</span> <br>
                <span class="adres">ул. новиградова 15</span> <br>
                <span class="price_room">40 000 ₽ в месяц</span><br>
            </div>
            <img src="/public/img/logo/avito.svg" alt="" class="avito_logo">
        </div>
        <div class="media_avito f">
            <img src="/public/img/logo/mess.svg" alt="" class=" up writ mr_1">
            <img src="/public/img/logo/call-phone.svg" alt="" class=" up alo">
        </div>
        </div>
    </div>
    
</template>

<script>

</script>

<style>
.main_block {
    border:1px solid #000;
    padding:33px;
    border-radius:10px;
    margin-top:40px;
    margin-bottom:30px
}
.img_avito {
    width:165px;
    height:105px;
    margin-right:30px
}
.avito_logo {
    widows:40px;
    height:40px;
    transform:translateY(-20px);
    margin-left:auto
}
.media_avito {
    justify-content:flex-end
}
.f {
    display:flex
}
.up {
    transform:translateY(-20px)
}
.mr_1 {
    margin-right:10px
}

</style>