<template>
    <div class="conatiner">
    <div class="name_sender">Анатолий</div>
    <div class="activity">
        <div class="status_sender">Online</div>
        <div class="poin_activity"></div>
        
    </div>
    <div class="input-container">
        <button class="icon clip-icon"></button>
        <input type="text" placeholder="Введите текст...">
        <button class="icon mic-icon"></button>
      </div>
      


</div>
    
    
</template>

<script>

</script>

<style>
.input-container {
  position: fixed;
  bottom: 0;
  left: 0;
  right: 0;
  display: flex;
  align-items: center;
  padding: 10px;
  background-color: #fff;
  box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.1);
  z-index: 100; }
  .input-container input {
    flex: 1;
    padding: 10px 40px;
    border: 1px solid #ccc;
    border-radius: 20px;
    outline: none; }
  .input-container .icon {
    position: absolute;
    width: 25px;
    height: 25px;
    background-size: contain;
    background-repeat: no-repeat;
    border: none;
    background-color: transparent;}
    .input-container .icon.clip-icon {
      left: 20px;
      background-image: url("../../../img/logo/attachments-02.svg"); }
    .input-container .icon.mic-icon {
      right: 20px;
      background-image: url("../../../img/logo/mic-on.svg"); }

.activity {
  display: flex;
  justify-content: center; }

.name_sender {
  text-align: center; }

.poin_activity {
  height: 5px;
  width: 5px;
  background-color: #04e004;
  border-radius: 100%; }



</style>