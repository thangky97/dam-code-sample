<h1>Liên hệ</h1>
<div class="colum">
   <div class="left">
      <div class="form">
         <label for="">Name</label>
         <input type="text" name="" id="" placeholder="Name">
      </div>
      <div class="form">
         <label for="">Email</label>
         <input type="text" name="" id="" placeholder="Email">
      </div>
      <div class="form">
         <label for="">Subject</label>
         <input type="text" name="" id="" placeholder="Subject">
      </div>
      <div class="form">
         <label for="">Message</label>
         <textarea name="" id="" cols="30" rows="10" placeholder="Message"></textarea>
      </div>
   </div>
   <div class="right">
      <label for="">Adress:</label>
      <h4>Số 422 Cầu Giấy (Ngã tư Cầu Giấy - Nguyễn Phong Sắc), P. Dịch Vọng Hậu, Q. Cầu Giấy, TP. Hà Nội </h4>
      <label for="">Phone:</label>
      <h4>1800 6601</h4>
      <label for="">Email:</label>
      <h4>fptshop@fpt.com.vn</h4>
   </div>
</div>

<style>
   .colum{
      display: flex;
      justify-content: space-between;
   }
   label, .right label{
      display: block;
      margin-bottom: 5px;
   }

   .left{
      width: 60%;
    
   }

   .left input, .left textarea, .right h4{
      margin-bottom: 10px;
      width: 100%;
   }

   .left input, .left textarea{
      padding: 3px 5px;
      border-radius: 5px;
      border: 1px solid #ccc;
   }

   .right{
      width: 38%;
   }
</style>