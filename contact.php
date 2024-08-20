<?php 
    include 'nav.php';
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
    <style>
        /* From Uiverse.io by gharsh11032000 */ 
.form-container {
  width: 400px;
  background: linear-gradient(#212121, #212121) padding-box,
              linear-gradient(145deg, transparent 35%,#e81cff, #40c9ff) border-box;
  border: 2px solid transparent;
  padding: 32px 24px;
  font-size: 14px;
  font-family: inherit;
  color: white;
  display: flex;
  flex-direction: column;
  gap: 20px;
  box-sizing: border-box;
  border-radius: 16px;
}

.form-container button:active {
  scale: 0.95;
}

.form-container .form {
  display: flex;
  flex-direction: column;
  gap: 20px;
}

.form-container .form-group {
  display: flex;
  flex-direction: column;
  gap: 2px;
}

.form-container .form-group label {
  display: block;
  margin-bottom: 5px;
  color: #717171;
  font-weight: 600;
  font-size: 12px;
}

.form-container .form-group input {
  width: 100%;
  padding: 12px 16px;
  border-radius: 8px;
  color: #fff;
  font-family: inherit;
  background-color: transparent;
  border: 1px solid #414141;
}

.form-container .form-group textarea {
  width: 100%;
  padding: 12px 16px;
  border-radius: 8px;
  resize: none;
  color: #fff;
  height: 96px;
  border: 1px solid #414141;
  background-color: transparent;
  font-family: inherit;
}

.form-container .form-group input::placeholder {
  opacity: 0.5;
}

.form-container .form-group input:focus {
  outline: none;
  border-color: #e81cff;
}

.form-container .form-group textarea:focus {
  outline: none;
  border-color: #e81cff;
}

.form-container .form-submit-btn {
  display: flex;
  align-items: flex-start;
  justify-content: center;
  align-self: flex-start;
  font-family: inherit;
  color: #717171;
  font-weight: 600;
  width: 40%;
  background: #313131;
  border: 1px solid #414141;
  padding: 12px 16px;
  font-size: inherit;
  gap: 8px;
  margin-top: 8px;
  cursor: pointer;
  border-radius: 6px;
}

.form-container .form-submit-btn:hover {
  background-color: #fff;
  border-color: #fff;
}

.contact{
    display: flex;
    align-items: center;
    justify-content:space-around;
     gap: 20px; 
   
        
        background-image: linear-gradient(rgba(0,0,0,0.85),rgba(0,0,0,0.70)), url(contact.jpeg);
        background-size: cover;
        background-position: center;
}

.head{
  background: rgb(2,0,36);
  background: linear-gradient(90deg, rgba(2,0,36,1) 5%, rgba(9,9,121,1) 47%, rgba(8,32,136,1) 66%, rgba(0,212,255,1) 100%);
    height: 100px;
    color: #fff;
    font-size: 2rem;
    display: flex;
    align-items: center;
    justify-content: center;
   
}
#map {
            height: 400px;
            width:450px;
        }
    </style>
</head>
<body>
   
    <section class="head">
      contact
    </section>
    <section class="contact">
        <div>
        <div class="form-container">
      <form class="form">
        <div class="form-group">
          <label for="email">Name </label>
          <input type="text" id="email" name="email" required="">
        </div>
        <div class="form-group">
          <label for="email">Mobile </label>
          <input type="text" id="email" name="email" required="">
        </div>
        <div class="form-group">
          <label for="textarea">How Can We Help You?</label>
          <textarea name="textarea" id="textarea" rows="10" cols="50" required="">          </textarea>
        </div>
        <button class="form-submit-btn" type="submit">Submit</button>
      </form>
    </div>
        </div>
<div>
  <?php  include 'map.php';?>
</div>
    </section>
    <?php include 'footer.php';?>
</body>
</html>