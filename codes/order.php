<!DOCTYPE html>
<html>

<body>
<fieldset style="background-color:lightgreen;font-family:courier;">
<center><legend><h1><u>HAPPILY PLACE AN ORDER AND WAIT FOR YUMMY FOOD ITEMS</u></h1></legend></center>
<form action="http://localhost/wt/orderback.php" id="form" method="post">
<label for="uname" style="color:blue"><b>NAME:</b></label>
<input type="name" id="nam" name="name" placeholder="enter" required><br><br>
<b>MOBILE NUMBER FOR PAYING:</b><input type="text" name="mo"  required><br><br>
<label for="dis"><b>DISTRICT:</b></label>
<input type="text" id="dis" name="dis" palceholder="Enter your district" required><br><br>
<label for="add"><b>ADDRESS:</b></label><br>
<textarea rows="10" cols="50" id="add" name="add" placeholder="Enter your address to pace an order" required>ADDRESS</textarea><br>



<h1><u><b>SELECT RECIPES YOU WANT TO BE ORDER</b></u></h1><br><br>
<h2 style="color:blue;font-family:courier;"><u><b>BREAK FAST RECIPES:</b></u></h2>
1.Spicy Pongal:<input type="checkbox" name="re[]" value="spicy pongal"><br>
2.Dosa<input type="checkbox" name="re[]" value="Dosa"><br>
3.Soft and Puffy Puris:<input type="checkbox" name="re[]" value="Soft and Puffy"><br>
4.Semolina Upma<input type="checkbox" name="re[]" value="Semolina Upma"><br>
5.Andhra Style vada:<input type="checkbox" name="re[]" value="Andhra Style Vada"><br>
6.Idly:<input type="checkbox" name="re[]" value="Idly"><br>
7.Fenugreek chapathi:<input type="checkbox" name="re[]" value="Fenugreek chapathi"><br>
8.Punugula:<input type="checkbox" name="re[]" value="Punugula"><br>
9.Green Gram Dosa:<input type="checkbox" name="re[]" value="Green Gram Dosa"><br>
10.Minapa Rotti:<input type="checkbox" name="re[]" value="Minapa Rotti">


<h2 style="color:blue;font-family:courier;"><u><b>LUNCH RECIPES:</b></u></h2>
1.Full meals:<input type="checkbox" name="re[]" value="Full meals"><br>
2.Mini Meals:<input type="checkbox" name="re[]" value="Mini Meals"><br>
3.Meals Parcel:<input type="checkbox" name="re[]" value="Meals Parcel"><br>
4.Meals Family Pack:<input type="checkbox" name="re[]" value="Meals Family Pack"><br>
5.Chapathi:<input type="checkbox" name="re[]" value="Chapathi"><br>
6.Parota:<input type="checkbox" name="re[]" value="Parota"><br>
7.Curd Rice:<input type="checkbox" name="re[]" value="Curd Rice"><br>
8.Pulihora:<input type="checkbox" name="re[]" value="Pulihora"><br>
9.Ragi Bolls:<input type="checkbox" name="re[]" value="Ragi Bolls"><br>
10.Kuska:<input type="checkbox" name="re[]" value="Kuska"">



<h2 style="color:blue;font-family:courier;"><u><b>DINNER RECIPES:</b></u></h2>
1.Gutti Vankaya Kura:<input type="checkbox" name="re[]" value="Gutti Vankaya Kura"><br>
2.PanasaPottuKoora:<input type="checkbox" name="re[]" value="PanasaPottuKoora"><br>
3.Crispy Andhra Bindi:<input type="checkbox" name="re[]" value="Crispy Andhra Bindi"><br>
4.Boorelu:<input type="checkbox" name="re[]" value="Boorelu"><br>
5.Gongura Pachadi:<input type="checkbox" name="re[]" value="Gongura Pachadi"><br>
6.Beans Kudumulu:<input type="checkbox" name="re[]" value="Beans Kudumulu"><br>
7.Gongura Pickle Ambadi:<input type="checkbox" name="re[]" value="Gongura Pickle Ambadi"><br>
8.Dondakaya Fry:<input type="checkbox" name="re[]" value="Dondakaya Fry"><br>
9.Bobbatlu:<input type="checkbox" name="re[]" value="Bobbatlu"><br>
10.Uppindi:<input type="checkbox" name="re[]" value="Uppindi">

<h2 style="color:blue;font-family:courier;"><u><b>NON-VEG RECIPES:</b></u></h2>
1.Mutton Korma:<input type="checkbox" name="re[]" value="Mutton Korma"><br>
2.Malabar Fish Biryani:<input type="checkbox" name="re[]" value="Malabar Fish Biryani"><br>
3.Goan Prawn Curry with Raw Mango:<input type="checkbox" name="re[]" value="Goan Prawn Curry with Raw Mango"><br>
4.Butter Chicken:<input type="checkbox" name="re[]" value="Butter Chicken"><br>
5.Chicken65:<input type="checkbox" name="re[]" value="Chicken65"><br>
6.Hyderabad Biryani:<input type="checkbox" name="re[]" value="Hyderabad Biryani"><br>
7.Gonguru Mamsam:<input type="checkbox" name="re[]" value="Gonguru Mamsam"><br>
8.Royyala Eguru:<input type="checkbox" name="re[]" value="Royyala Eguru"><br>
9.Chicken Tikka:<input type="checkbox" name="re[]" value="Chicken Tikka"><br>
10.Grilled Fish With saute spinach:<input type="checkbox" name="re[]" value="Grilled Fish With saute spinach">


<h2 style="color:blue;font-family:courier;"><u><b>VEG-RECIPES:</b></u></h2>
1.Veg Biriyani:<input type="checkbox" name="re[]" value="Veg Biriyani" ><br>
2.Panner Biriyani:<input type="checkbox" name="re[]" value="Panner Biriyani"><br>
3.Mushroom Biriyani:<input type="checkbox" name="re[]" value="Mushroom Biriyani"><br>
4.Rajma Chawal:<input type="checkbox" name="re[]" value="Rajma Chawal"><br>
5.Bisi bele bath:<input type="checkbox" name="re[]" value="Bisi bele bath"><br>
6.Dal Makhan:<input type="checkbox" name="re[]" value="Dal Makhan"><br>
7.Vangi Bath:<input type="checkbox" name="re[]" value="Vangi Bath"><br>
8.Palak Paneer:<input type="checkbox" name="re[]" value="Palak Paneer"><br>
9.Kashmir Pulao:<input type="checkbox" name="re[]" value="Kashmir Pulao"><br>
10.Briji rice:<input type="checkbox" name="re[]" value="Briji rice"">


<h2 style="color:blue;font-family:courier;"><u><b>SNACKS ITEMS:</b></u></h2>
1.Samosa:<input type="checkbox" name="re[]" value="Samosa"><br>
2.Panipuri:<input type="checkbox" name="re[]" value="Panipuri"><br>
3.PavBhaji:<input type="checkbox" name="re[]" value="PavBhaji"><br>
4.Aloo Tikki:<input type="checkbox" name="re[]" value="Aloo Tikki"><br>
5.Panneer Tikka:<input type="checkbox" name="re[]" value="Panneer Tikka"><br>
6.Bread pakora:<input type="checkbox" name="re[]" value="Bread pakora"><br>
7.Dabeli:<input type="checkbox" name="re[]" value="Dabeli"><br>
8.Momo:<input type="checkbox" name="re[]" value="Momo"><br>
9.Batata Vada:<input type="checkbox" name="re[]" value="Batata Vada"><br>
10.Masala Papad:<input type="checkbox" name="re[]" value="Masala Papad">


<h2 style="color:blue;font-family:courier;"><u><b>DESSERTS:</b></u></h2>
1.Ariselu:<input type="checkbox" name="re[]" value="Ariselu"><br>
2.Burelu:<input type="checkbox" name="re[]" value="Burelu"><br>
3.Kaja:<input type="checkbox" name="re[]" value="Kaja"><br>
4.Kajjikayalu<input type="checkbox" name="re[]" value="Kajjikayalu"><br>
5.Kobbari Achulu:<input type="checkbox" name="re[]" value="Kobbari Achulu"><br>
6.Kobbari Undalu:<input type="checkbox" name="re[]" value="Kobbari Undalu"><br>
7.Nuvvulundalu:<input type="checkbox" name="re[]" value="Nuvvulundalu"><br>
8.Putharekulu:<input type="checkbox" name="re[]" value="Putharekulu"><br>
9.Rava Laddu:<input type="checkbox" name="re[]" value="Rava Laddu"><br>
10.Sunnusalu:<input type="checkbox" name="re[]" value="Sunnusalu">


<h2 style="color:blue;font-family:courier;"><u><b>FAST-FOOD:</b></u></h2>
1.Sandwiches:<input type="checkbox" name="re[]" value="Sandwiches"><br>
2.French Fries:<input type="checkbox" name="re[]" value="French Fries"><br>
3.Onion rings:<input type="checkbox" name="re[]" value="Onion rings"><br>
4.Pizza:<input type="checkbox" name="re[]" value="Pizza"><br>
5.Burger:<input type="checkbox" name="re[]" value="Burger"><br>
<br><br>
<h2 style="color:red">***ONLY CASH ON DELIVERY AVAILABLE***</h2>

<button type="submit">SUBMIT</button>
<button type="reset">RESET</button>

</form>
</fieldset>

</body>
</html>



