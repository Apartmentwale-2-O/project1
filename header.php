
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Something </title>
   
    
    
    <link href="https://fonts.googleapis.com/css2?family=Grenze+Gotisch:wght@500&family=Rowdies&display=swap" rel="stylesheet">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Lobster&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <link rel="stylesheet" href="style.css">
  </head>
<style>
  #exampleModal{
      min-width: 420px;
      max-width: 420px;
      min-height: auto;
      max-height: auto;
      
    }
  .modal-content{
      -webkit-border-radius: 50px;
      -moz-border-radius: 50px;
       border-radius: 40px; 
       background: url("https://images.iphonephotographyschool.com/21859/1120/iPhone-Photos-Portrait-Backgrounds-31.jpg"); 
       background-position: center;
       background-repeat: no-repeat;
       background-size: cover;
      } 
    
    input[type=email],input[type=password]{
        border-radius: 15px;
        padding: 4% 4%;
    }
    #loginbutton{
      border: 1px solid #007bff;
      font-size: larger;
      width: 80%;
      border-radius: 20px;      
      
    }
    #loginbutton:hover{
      background-color: white;
      border-color: #007bff;
      color:#007bff;
      transition: 0.5s;

    }
</style>
<body>



<!---------------------------------------Navbar--------------------------------------------> 

<!--Navbar -->
<nav id="navbar" class="mb-1 fixed-top navbar navbar-expand-lg navbar-dark secondary-color lighten-1">
  <div class="container" >
  <a class="navbar-brand" href="#"><i class="fa fa-bolt fa-2x"></i></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-555"
    aria-controls="navbarSupportedContent-555" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-555">
    <ul class="nav nav-pills" id="pills-tab" role="tablist">
      <li class="nav-item" role="presentation">
        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Home</a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-Explore" role="tab" aria-controls="pills-profile" aria-selected="false">Explore</a>
      </li>
      
    </ul>
    <ul class="nav ml-auto nav-flex-icons">
      <li class="nav-item">
        <div class="container h-100">
          <div class="d-flex justify-content-center h-100">
            <div class="searchbar">
              <input class="search_input" type="text" name="" placeholder="Search...">
              <a href="#" class="search_icon"><i class="fa fa-search"></i></a>
            </div>
          </div>
        </div>   
      </li>
         
      <li class="nav-item">
      <button id="sign" class="btn btn-outline-dark mx-1 my-1" data-toggle="modal" data-target="#exampleModal" >Signup</button> 
      </li>
      <li class="nav-item">
      <button class="btn btn-outline-primary mx-1 my-1" data-toggle="modal" data-target="#exampleModal1">Login</button>
      </li>
    </ul>
  </div>
  </div>
</nav>

<!--/-------------------------------------.Navbar ------------------------------------------------------------------------------>



<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Blanditiis at ad quisquam sapiente, deleniti a rerum, numquam maxime harum excepturi earum. Harum mollitia cumque laborum ipsum similique quam sapiente adipisci aperiam eligendi, molestiae quibusdam sed id quaerat maxime iste reprehenderit hic quod, est amet inventore? Alias quam id quia ducimus animi mollitia molestiae unde. Sit cumque doloremque sequi magnam, numquam sed beatae minus natus iusto, dolore nesciunt fugiat porro quas voluptatum asperiores aperiam eaque? Rem consequuntur natus amet tempora consequatur error beatae, aperiam provident saepe aut animi debitis ipsam? Natus, totam corporis doloremque asperiores maxime pariatur veritatis illo incidunt cumque quibusdam magnam nobis! Quaerat laborum maxime unde eveniet ex excepturi totam, necessitatibus odit neque omnis officia deleniti earum assumenda, fugit consequatur cumque vitae praesentium rerum aliquam voluptas aperiam asperiores, dolores cupiditate. Eos labore error ad soluta eligendi sunt optio. Quisquam excepturi doloribus quaerat eos distinctio odio neque, sapiente voluptate, aliquam similique id quos debitis sit repudiandae incidunt modi, esse rem numquam ea voluptas placeat nulla reprehenderit. Minima architecto tenetur esse vitae quibusdam adipisci assumenda, doloremque vero? Veritatis modi inventore tenetur vel illo fugit voluptatibus exercitationem ratione ad perferendis beatae, a debitis earum, nihil eligendi laudantium! Veniam reiciendis saepe quam iusto fugit ratione quisquam consectetur, asperiores nihil nemo est hic magnam totam aliquid. Minima recusandae dicta deleniti sed fugiat quo labore asperiores! Obcaecati modi rerum, eum rem explicabo minima eligendi. Facere dicta unde quas sequi! Iste mollitia iure, ipsa unde error asperiores nobis nemo tempore rem repellendus quam vel quod eveniet, facere amet? At, officiis. Nihil ducimus adipisci nisi quia harum. Perspiciatis praesentium minima ullam distinctio! Rem facere veniam perspiciatis blanditiis ab officia reprehenderit quas reiciendis iusto. Tenetur eius tempora minima ex quidem id facere distinctio suscipit! Impedit, odit. Architecto maiores quas sunt eveniet voluptas, veritatis tempora asperiores similique. Harum iusto tempora consequatur ab laborum rerum omnis aliquam repudiandae, ea iste voluptate molestias deleniti quaerat minima distinctio dolorum velit mollitia unde sequi! Maiores, odio accusantium autem eligendi earum tempora sequi maxime doloribus beatae at, numquam eum voluptatem assumenda delectus vero explicabo quam sit aliquid reprehenderit corrupti dignissimos commodi omnis recusandae? Ea deserunt neque aperiam, qui consequuntur porro eaque eius voluptas quibusdam sapiente tenetur et, repudiandae architecto error. Quas iste dolorum ipsa tempore odit deserunt quos quod sequi optio maxime inventore officiis molestias amet ea esse eligendi dolores aperiam quibusdam quia, repellat sint consectetur debitis. Molestiae dolor similique veritatis est obcaecati! Nobis ipsam vel suscipit, cupiditate provident illo voluptatum, fugit praesentium eum quos ea quam laborum, maiores voluptatibus molestiae accusantium rerum modi natus! Ea, veniam doloribus? Fugit ducimus praesentium enim molestiae? Necessitatibus quaerat autem, enim odio velit fuga quam natus labore voluptatibus voluptas dolorem sed vel similique odit, minus eligendi? Iusto, asperiores reprehenderit debitis ullam illo facere ab. Deserunt neque molestias inventore repudiandae facere alias. Assumenda amet dicta quidem, aperiam, quibusdam architecto impedit asperiores ipsa obcaecati tempora natus quos esse laborum minus provident corporis quasi porro! Officiis, facere! Molestiae accusantium quam animi dolor. Rerum, a aliquid neque nam fugiat laborum corporis voluptate molestiae quis excepturi expedita nisi! Fugiat velit optio tempora hic ex laudantium quidem soluta maiores itaque ullam neque assumenda quaerat cum impedit, excepturi sapiente adipisci officia doloremque omnis ad ipsam laborum molestiae. Quibusdam quia, consectetur illo esse ad amet ipsum aliquid? Eum perspiciatis maxime illo, sunt dolores perferendis magni, magnam modi consectetur eligendi iste odit veniam aut fugit. Dignissimos dolorum delectus asperiores similique maxime quisquam, autem illo minima, quia laudantium architecto repellat tenetur, dolorem libero adipisci obcaecati. Quaerat expedita aut nulla. Saepe, illum ea cupiditate, nemo earum omnis doloremque officiis sapiente ducimus necessitatibus non facere delectus laboriosam cum voluptatem quo velit at eum sit. Necessitatibus sint numquam aperiam dolorum, fuga ab accusamus? Repellat ullam ex perspiciatis ducimus facilis natus explicabo recusandae, consequuntur veritatis autem in, libero, consectetur delectus nobis quae id voluptatum praesentium possimus magnam odit sed cupiditate voluptate rerum placeat? Dolorum magni atque dolores repudiandae excepturi ratione repellendus assumenda, adipisci ad autem in ab vero maiores veniam fugit provident incidunt commodi et dolorem deleniti veritatis. Aliquid, ipsum dolores labore totam saepe facilis laudantium sit perspiciatis ipsam. Dolorem tenetur quisquam suscipit totam necessitatibus explicabo vitae incidunt libero id quia corporis soluta aut ipsam sequi veritatis debitis tempore, repudiandae ducimus consectetur inventore natus animi in impedit. Quo quisquam nihil iure, autem fugiat magnam, deserunt doloremque quasi nulla, culpa eligendi. Praesentium amet voluptatum porro eius id ipsam! Repudiandae, nemo amet necessitatibus reprehenderit, eveniet id aliquid cupiditate, maxime unde tenetur fugiat cum perspiciatis dignissimos corporis consequatur dolor magnam placeat praesentium saepe sapiente perferendis? Corporis expedita dolores a quis veniam ipsam autem in ab ut, suscipit voluptates fuga reiciendis hic aspernatur ex, nihil quos aliquid dolor ad distinctio eum error facere cupiditate. Sed asperiores harum quos quidem maiores illum totam voluptatem eveniet praesentium, voluptate deserunt veritatis, voluptatum sapiente doloremque, illo reprehenderit natus? Praesentium quibusdam maxime laboriosam eius maiores molestiae voluptatem nam aliquid! Doloremque quae fuga dolores error facilis facere atque similique pariatur consequuntur, nam quia expedita assumenda architecto nulla impedit, repudiandae in, ipsum rerum ab adipisci debitis enim tenetur unde? Quam iusto, pariatur quia, optio, nisi culpa harum voluptatem quaerat earum est nulla reprehenderit dolorum impedit consectetur distinctio autem non dolorem asperiores hic in tenetur recusandae vitae nam eaque. Iste, optio veritatis. Consequatur nam iure maxime a architecto iusto velit esse recusandae cum asperiores ipsa, sit itaque omnis impedit doloremque reprehenderit ducimus amet id dolor dignissimos doloribus labore eaque aut ullam. Voluptas voluptates accusantium necessitatibus natus consectetur, ea assumenda doloremque tenetur sint nostrum, id quibusdam voluptatum quia corporis cupiditate optio, cumque cum? Eius quod veniam quasi modi ad obcaecati doloribus, nulla dignissimos, eligendi similique magni beatae laudantium mollitia fugiat, delectus voluptate maiores quia explicabo unde velit eum! Possimus dolores explicabo pariatur hic officia, harum architecto iste incidunt, eum ducimus dignissimos eveniet corporis obcaecati! Ex enim eligendi exercitationem provident sapiente accusamus, sequi, amet culpa quod velit earum rerum vitae quis minima possimus nisi fuga consequatur tenetur molestiae repellendus, nostrum pariatur ullam! Eius repudiandae porro, quia distinctio voluptates ratione nemo rerum provident unde adipisci eveniet amet!</p>
 
<!-------------------Navbar end------------------------------------------------------------------------------>


<script type="text/javascript" src="move.js"></script>
