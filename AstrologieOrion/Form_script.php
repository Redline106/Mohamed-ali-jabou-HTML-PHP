<!DOCTYPE html>
<html>
<head>
	<title>Astro</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet"  href="Main.css" type="text/css"/>
	<meta name="viewport" content="width=device=width , initial-scale=1.0">
</head>
<body class="body">
<header class="mainheader">

<h2>Astorogie D'Orion </h2>


<nav class="mainheader nav"><ul>
	<li><a class="active" href="index.html"> Acceuil </a></li>	
	<li><a href="page2.html">Les signe et dates de zodiaques </a></li>	

	<li><a href="page3.html"> Les caracteristiques des signes du zodiaque   </a></li>	
	<li><a href="page4.html"> Les Traits assiciés aux différent signes </a></li>	
	<li><a href="page5.html">Contact </a></li>	
    <li><a href="page5.html">Horoscope</a></li>
	
</ul></nav>	
</header>




<div class="mainContent">
	<div class="content">
		
		<h3 class="p1">Horoscope du jour </h3>


	
			






<?php
    
$name=$_POST['name'];
$firstname=$_POST['firstname'];
$date=$_POST['date'];
$signe=$_POST['signes'];

print " votre horoscope du jour:$name <br/>";



switch ($signe) {
    

       case 1:
        print nl2br("Lune L’astre lunaire terminera sa course dans le signe du Bélier. Nous nous montrerons prêts à tout pour réaliser nos rêves et nos désirs.

Amour Vous aurez le vent dans les voiles en ce qui concerne l’amour. Une belle rencontre chavirera votre cœur.

Santé Un problème de gencive ou un mal de dents vous obligera peut-être à suivre un traitement coûteux… Que voulez-vous, ce sont des choses qui arrivent !

Travail et Argent La chance professionnelle est importante !");
        break;

        case 2:
        print nl2br("Lune L’astre lunaire terminera sa course dans le signe du Bélier. Nous nous montrerons prêts à tout pour réaliser nos rêves et nos désirs.

Général Vous avez du talent à revendre. Il n’y a que vous qui en doutiez ! La preuve en est que tout ce que vous toucherez réussira. De deux choses l’une, ou bien le travail de groupe vous stimule grandement, ou bien il vous cause désenchantement par-dessus désenchantement.");
        break;
        
        case 3:
        print nl2br("Lune L’astre lunaire terminera sa course dans le signe du Bélier. Nous nous montrerons prêts à tout pour réaliser nos rêves et nos désirs.

Général Un enfant ou jeune adulte, un frère ou une sœur, un ami sinon, cherchera à vous manipuler. Vous verrez clair dans son jeu, mais il continuera de s’enliser dans ses excès à cause de son manque de maturité. L’entreprise réajuste la convention collective, ce qui cause du remue-ménage.");
        break;
        
        case 4:
        print nl2br("Lune L’astre lunaire terminera sa course dans le signe du Bélier. Nous nous montrerons prêts à tout pour réaliser nos rêves et nos désirs.

Général Vous allez vous associer avec une amie ou un ami de longue date. Peut-être même organiserez-vous une rencontre dès aujourd’hui… Toutefois, vous auriez intérêt à vous informer davantage avant de donner votre accord final ou de dénouer le cordon de votre bourse.");
        break;
        
        case 5:
        print nl2br("Lune L’astre lunaire terminera sa course dans le signe du Bélier. Nous nous montrerons prêts à tout pour réaliser nos rêves et nos désirs.

Général La soirée s’annonce des plus agréables. La semaine qui vient sera idéale pour régler des affaires d’argent en suspens. Le commerce et les transactions d’affaires seront grandement favorisés. Même que des imprévus joueront en votre faveur, c’est tout dire !");
        break;
        
        case 6:
        print nl2br("Lune L’astre lunaire terminera sa course dans le signe du Bélier. Nous nous montrerons prêts à tout pour réaliser nos rêves et nos désirs.

Général Vous pourriez renouer avec des proches et la rencontre se déroulera d’une manière tout à fait imprévue. Vous serez plus émotif lorsqu’il s’agira de régler un conflit. Évitez surtout de vous lancer dans de grandes justifications. Bref, assumez vos torts.");
        break;
        
        case 7:
        print nl2br("Lune L’astre lunaire terminera sa course dans le signe du Bélier. Nous nous montrerons prêts à tout pour réaliser nos rêves et nos désirs.

Général Vous pourriez dire des choses qui dépasseront le fond de votre pensée. Ou bien vous vous confierez trop facilement et, après coup, vous vous en mordrez les lèvres. Votre vie prendra une nouvelle direction, mais vous devrez saisir cette chance sans trop vous poser trop de questions.");
        break;
        
        case 8:
        print nl2br("Lune L’astre lunaire terminera sa course dans le signe du Bélier. Nous nous montrerons prêts à tout pour réaliser nos rêves et nos désirs.

Général Une personne, que vous allez rencontrer au hasard d’une sortie, s’intéressera à vous intensément. Un peu trop peut-être ! Vous devez distinguer « attirance et dépendance à l’amour ». Votre besoin de séduire, de vous sentir désiré pourrait vous jouer de mauvais tours en ce sens-là.");
        break;
        
        case 9:
        print nl2br("Lune L’astre lunaire terminera sa course dans le signe du Bélier. Nous nous montrerons prêts à tout pour réaliser nos rêves et nos désirs.

Général Certains proches ou amis n’approuveront pas vraiment votre manière de voir les choses ou de penser. Qu’à cela ne tienne, vous vous réconforterez auprès de l’être cher. Sinon, l’être aimé vous donnera une preuve de son amour… une preuve irréfutable !");
        break;

        case 10:
        print nl2br("Lune L’astre lunaire terminera sa course dans le signe du Bélier. Nous nous montrerons prêts à tout pour réaliser nos rêves et nos désirs.

Général Vous serez perturbé par les coûts importants rattachés à une réception : anniversaire, sortie sociale ou amicale, etc. Ou bien des dépenses reliées aux soins dentaires, à la voiture, aux vêtements, etc., achèveront de grignoter votre budget. Belle chance amoureuse !");
        break;

        case 11:
        print nl2br("Lune L’astre lunaire terminera sa course dans le signe du Bélier. Nous nous montrerons prêts à tout pour réaliser nos rêves et nos désirs.

Général Un proche ou un ami vous fera des révélations. Puis, vous décèlerez dans son discours un manque d’authenticité, d’intégrité et de considération pour les autres. Vous penserez surtout que s’il parle ainsi de cette personne, il doit en avoir long à dire dans votre dos !");
        break;

        case 12:
        print nl2br("Lune L’astre lunaire terminera sa course dans le signe du Bélier. Nous nous montrerons prêts à tout pour réaliser nos rêves et nos désirs.

Général Il pourrait se produire des retards dans la vente d’une propriété. La chance se remettra bientôt à tourner. Vous brillerez dans toutes formes d’analyses abstraites, qu’elles soient d’ordre philosophique ou religieux ! Vous allez prévoir longtemps en avance.");
        break;






        
        
    
    default:
        print "Your favorite color is neither red, blue, nor green!";
}


?>

	</div>
	
</div>





</body>
</html>
