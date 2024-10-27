<template>
    <div class="container">
    <div class="main_block ">
        <div class="time_trip f">
            <div class="time">
                <div class="from">20:30</div>
                <div class="in">01.11.24</div>
                <div class="place">Ростов-на-Дону</div>
            </div>
            <div class="line"></div>
            <div class="time">
                <div class="from">19:50</div>
                <div class="in">02.11.24</div>
                <div class="place">Ростов-на-Дону</div>
            </div>

        </div>
        <div class="buy f">
            <div class="price">5000 рублей</div>
            <button class="btn">Купить</button>
            
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
.time_trip {
    justify-content:center
}
.time {
    text-align:center
}
.f {
    display:flex
}
.place {
    display:flex;
    justify-content:flex-end
}
.line {
    height:5px;
    background-color:red;
    width:600px;
    transform:translateY(28px);
    margin:0 20px
}
.buy {
    justify-content:center
}
.price {
    transform:translateY(18px)
}
.btn {
    border:1px solid #000;
    border-radius:10px;
    margin:10px
}

</style>