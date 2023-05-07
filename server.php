<!-- 029 030 031 -->

<!-- هنا html استطيع كتابة  -->
<!--فقط serverفي حالة التشغبل عن طريق ال -->

<?php
// one line comment
/**
 *datatypes:integer ,float ,boolean ,string
 *if:one
 *  loop: for ,while ,do while ,for each
 * functions 
 * array 
 * OOP
 */

// $z=null;
// $g=[];


// var_dump($g);
// الخاصة به ونوعةvalueوتخبرك ما هي الvariableتأخذ ال
// ====================================lec31=============================================================================================
// =======================================================if===========================================================================================
$x = 10;
$y = 5;
$condation = $x > $y;
// echo $condation;
// true لقد ظهر رقم واحد اي 
// لن يظهر شئfalseلكن في حالة ال
// if ($condation) {
// echo "this condation is true";
// echo ==print
// هما الاثنان واحد
// اكثرcharacterتحمل echoلكن ال
// print("hello world <br>");
// ومن الممكن كتابتها بهذه الطريقة
// print "wallaaaaaaaaaaa <br>";

// echo("hello world <br>");
// ومن الممكن كتابتها بهذه الطريقة
// echo "wallaaaaaaaaaaa <br>";
//HTNL tagsلكي استطيع النزول خط واحد اقوك باستخدام 
// ويجب ان تكون بداخل الطبع لكي تعمل 

// } else if ($x > $y) {
//     echo "this condation is true";
// } else {
//     echo "all condation false";
// }
// =============================================switch==========================================
// $sign = "$";
// switch ($sign) {
//     case "+":
//         echo 50 + 10;
//         break;
//     case "-":
//         echo "minas";
//         break;
//     default:
//         echo "all cases is false";
// }
// ==========================================loops=========================================================================
// $i=0;
// global variable في حالة استخدام whileاقوم باستخدام 
// while($i<20){
// echo $i . "<hr>";
// . بعلامة concatinationيتم هنا 
// stringبجانب variable اي كتابة 

// echo "$i  <hr>";
// ""
//  `مثلstringوvariable استطيع ان اكتب بداخلها 

// ''
// string تعتبر كل ما في داخلها 
// $i++;
// }

// for($i=1;$i<20;$i++){
//     echo "$i wallaaaaaaaaa<br>";
// }

// $i=30;
// do{
//     echo " $i walllaa <hr>";
//     $i++;
// }
//  while($i<20);
// ====================================================Array====================================================================
// element infinity
// any data type

// indexed array هذا الشكل يسمي
// $array = ["george", "eid", 21];
// ويمكن كتابتها بهذه الطريقة
// $array = array("george", "eid", 21);

// multidementiol arrayهذا الشكل يسمي 
// $array=[["george","ashraf",["yasser","nour","hoho"]],"Eid"];
// echo $array[0][2][2] . "<br>";

// associative arrayهذا الشكل يسمي 
// $person = [

//         "id" => 1,
//         "name" => "george",
//         "job" => "angular developer"
//     ]

// multidementiol associative arrayهذا الشكل يسمي 

// $person = [
//     [
//         "id" => 1,
//         "name" => "george",
//         "job" => "angular developer"
//     ],
//     [
//         "id" => 2,
//         "name" => "ashraf",
//         "job" => "aaaaaa developer"
//     ],
//     [
//         "id" => 3,
//         "name" => "Eid",
//         "job" => "bbbbbbbbb developer"
//     ]
// ];
// ويمكن كتابتها بهذه الطريقة ايضا
// $person = array(
//     array(
//         "id" => 1,
//         "name" => "george",
//         "job" => "angular developer"
//     ),
//     array(
//         "id" => 2,
//         "name" => "ashraf",
//         "job" => "aaaaaa developer"
//     ),
//     array(
//         "id" => 3,
//         "name" => "Eid",
//         "job" => "bbbbbbbbb developer"
//     )
//     );
// echo $person[1]["name"];
// ويمكن طباعتها بهذه الطريقة ايضا
// foreach($person as $data){
// echo $data["id"]."<br>" ;
// echo $data["name"]."<br>";
// echo $data["job"]."<hr>";
// };

//  $numarray=count($array);
//  echo $numarray ."<br>";
// count()
// arrayتقوم بأحضار عدد ال

// echo var_dump($x)."<br>";
// arrayبالأخص لعرض الvar_dump تستخدم 
// or
// print_r($x);
// arrayتستخدم لعرض ال

// for($i=0;$i<$numarray;$i++){
//    echo $array[$i] ."<br>";
// }

// foreach
// loopهي
// ايضاarrayتقوم بطباعة ال
// foreach($array as $data){
// echo $data ."<br>";
// }
// ===============================================================function==============================================================================================
// function sum($n1, $n2)
// {
//     // return $n1 +$n2;
//     // or
//     echo $n1 + $n2;
// }
// sum(20, 20);
function getage($currentyear, $birthyear)
{
    $age = $currentyear - $birthyear;
    return $age;
};
$georgeage = getage(2023, 2022);
// if ($georgeage > 18) {
//     echo "you can use this site";
// } else {
//     echo "can't use this site";
//     header("location:https://translate.google.com/?sl=en&tl=ar&text=warn&op=translate");
//     // like window.location.replace in JS
// };
// ====================================================super global array get==============================================================================
$name = "george";
// super global array
// $_GET;
// print_r( $_GET);

// وتطبعة urlتأخذ ال
// get all data from url
// already declarted
// default
// built in associative array
// super:لbroswersانة يمكن رؤيتها من جميع الصفحات ومن جميع ال
// فيapplicationفيinspectفيurlيتم تخزين هذا ال

// $_GET['username']="george";
// pushهكذا اقوم بعمل 
// print_r($_GET);

// ============================================================================push &replace in array==============================================
// $x=[0,1,2,3,4];
// $x[]=60;
// arrayفيpush هذا معتاه اني اقوم بعمل 
// $x[0]=90;
//index0 للرقم الذي يوجد بreplaceهذا معناه اني اقوم بعمل 

// $x=array(
//     "username"=> "george",
//     "id"=>"1"
// );
// $x['age']=60;
// // ايضاassociative array فيpush ويمكن عمل 
// $x["username"]="eid";
// // replace وهكذا قمت بعمل 
// print_r($x)
// =========================================================================
// echo $_GET['username'];
// echo $_GET['password'];
// $n1 = $_GET['num1'];
// $n2 = $_GET['num2'];
// $sign = $_GET['sign'];
// switch ($sign) {
//     case "+":
//         echo $n1 + $n2;
//         break;
//     case "-":
//         echo $n1 - $n2;
//         break;
//     case "*":
//         echo $n1 * $n2;
//         break;
//     case "/":
//         if($n2 ==0){
//             echo"بس يلا";
//         } 
//         else{
//             echo $n1 / $n2;
//         }

//         break;
// }
// ==================lec32========================================================================================
// echo isset($_GET['username'])
//true or false valueتقوم بأرجاع
// موجودة ام لاdata هل هذه ال
// if(isset($_GET['send'])){
//     echo "True send data <br>";
// }
// else{
//     echo"false send data <br>";
// }
// if(isset($_GET['send2'])){
//     echo "True send data2 <br>";
// }
// else{
//     echo"false send data2 <br>";
// }
// مثال اخر 
// if (isset($_GET['btn1'])) {
//     echo $_GET['btn1'];
// }
// if (isset($_GET['btn2'])) {
//     echo $_GET['btn2'];
// }
// if (isset($_GET['btn3'])) {
//     echo $_GET['btn3'];
// }
// if (isset($_GET['btn4'])) {
//     echo $_GET['btn4'];
// }
// if (isset($_GET['btn5'])) {
//     echo $_GET['btn5'];
// }

// ===============================super global array====post========================================================================================
// get data from request and hide data from url
// formبالmethod="POST"يتم تفعليها عن طريق كتابة 
echo $_POST['username'];
echo $_POST['password'];
// requestفي الdataتقوم بعرض ال
// requestوهذا هو ال
print_r($_REQUEST)
// ===========================================================================================================

// php 
// htmlعلي الdirectتقوم بعرض نفسها 
// pattern MVPواي تعمل ب
// كلا منphpاستطيع كتابة داخل صفحة 
// html css js sql
// phpالخاص بالtag قفط هنا استطيع عدم اغلاق  phpلو سأكتب 
// error,warning ,notesتقوم بعرض 
// error_reporting(1)
// warning اي لا تقوم بعرض 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>server</title>
</head>

<body>
    <h1><?php echo $name ?></h1>

    <div class="container">
        <?php if ($georgeage < 20) : ?>
            <div class="alert alert-danger">
                sorry you can't use this site
            </div>
        <?php else : ?>

            <div class="alert alert-success">
                welcome you can use this site
            </div>
        <?php endif; ?>

    </div>
    <label for="">year</label>
    <select name="" id="">
        <option selected disabled>your year</option>
        <?php for ($i = 1990; $i <= 2023; $i++) : ?>
            <option><?php echo $i ?></option>
        <?php endfor; ?>
    </select>
    <hr>
    <label for="">mounth</label>
    <select name="" id="">
        <?php for ($i = 1; $i <= 12; $i++) : ?>
            <option><?php echo $i ?></option>
        <?php endfor; ?>
    </select>
    <hr>
    <label for="">day</label>
    <select name="" id="">
        <?php for ($i = 1; $i <= 30; $i++) : ?>
            <option><?php echo $i ?></option>
        <?php endfor; ?>
    </select>
    <hr>
    <!-- <form action="">
    <input type="text" name="username">
    <input type="text" name="password"> -->

    <!-- variable تعتبرة مباشرة phpال formداخل name بمجرد وضع  -->
    <!--  $_GETفي ال key    nameلقد اصبح هذا ال -->
    <!-- <button>submit</button>
    </form> -->

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</body>

</html>