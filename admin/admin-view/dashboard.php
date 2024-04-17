<?php

session_start();

if (!isset($_SESSION['taskManager-admin'])) {
    header("Location: /task_manager_project/admin/admin-view/login-admin.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../../app/view/assets/styles/admin/index.css">
    <script defer src="../../app/view/assets/scripts/jQuery/jquery-3.7.1.min.js"></script>
    <script defer src="../../app/view/assets/scripts/admin/index.js"></script>
    <script defer src="https://kit.fontawesome.com/1b1a22b128.js" crossorigin="anonymous"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="../../app/view/assets/images/task-logo-removebg-preview-icon.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <title>TaskManager</title>
</head>

<body class="row">

    <div class="sidebar col-lg-4 col-xl-3 col-xxl-2 h-100 p-3">
        <h2 class="d-flex mb-4">
            <i id="boton-actualizar-tamaño" class="fa-solid fa-bars d-flex justify-content-center"></i>
            <span class="w-100 ps-2">TaskManager</span>
        </h2>
        <h2 class="d-flex mb-4">
            <i class="fa-solid fa-gauge-high"></i>
            <span class="w-100 ps-2">Dashboard</span>
        </h2>
        <hr>
        <ul class="nav flex-column">
            <li class="nav-item mt-4">
                <a href="#" class="nav-link">
                    <i class="fa-solid fa-user"></i>
                    <span>Usuarios</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fa-solid fa-list-check"></i>
                    <span>Tareas</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fa-solid fa-chart-simple"></i>
                    <span>Estadísticas</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fa-solid fa-id-badge"></i>
                    <span>Perfil</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fa-solid fa-gear"></i>
                    <span>Configuración</span>
                </a>
            </li>
        </ul>
        <hr>
        <div class="modo-oscuro">

        </div>
    </div>

    <div class="main-content col-lg-8 col-xl-9 col-xxl-10 d-flex flex-column">
        <div class="nav-horizontal">
            <h2><i class="fa-solid fa-house-chimney"></i> Bienvenido de nuevo <?= $_SESSION['taskManager-admin'] ?></h2>
        </div>
        <div class="content-text-main col-lg-8 col-xl-9 col-xxl-10 h-100">
            <div class="content-text p-4">
                hola Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero voluptatum officiis rerum nihil expedita itaque nostrum iusto placeat eius, similique quas eum adipisci, totam qui rem. Aspernatur consequatur sunt sequi vero enim id necessitatibus magnam? Quibusdam eum natus modi distinctio voluptate aliquam, repellendus doloribus deleniti aliquid nobis excepturi qui necessitatibus at dolorum quos optio fugit id amet ipsum illum deserunt! Amet exercitationem, eligendi magnam earum est odio numquam praesentium quia hic dolorem porro a! Provident magni aspernatur reprehenderit, minima quae dolorum perferendis! Quo porro iusto pariatur quibusdam earum voluptas laboriosam mollitia repudiandae reprehenderit atque sunt corrupti laudantium quis distinctio dolores odit ab, impedit, praesentium facere qui dolor error magnam minima eos! Eum cupiditate id voluptatibus. Vel at praesentium placeat necessitatibus unde aut repellat. Consequuntur, voluptates iste veniam blanditiis inventore, neque ipsa mollitia eveniet exercitationem animi, obcaecati sed quia quis ullam laboriosam. Hic amet fugit sed corrupti ipsa minima perspiciatis nobis quod nesciunt optio voluptatum distinctio, placeat provident illo vel nulla dolore quasi. Velit molestiae et nesciunt perspiciatis. Nemo eligendi placeat quod molestiae, ipsum facere autem ipsam repellendus inventore, unde dolorum. Reiciendis sunt harum similique maiores asperiores! Eum labore neque doloribus, provident perferendis dicta. Perferendis ab quod culpa amet, ipsum magni. Facilis alias numquam atque corporis! Tempore quod dolor recusandae saepe voluptates eius doloremque qui eaque nam officiis illum quia possimus adipisci alias, cupiditate debitis facere vitae similique ipsum molestiae. Enim, fugit repudiandae, iure id placeat quasi minima eius mollitia nihil recusandae voluptate, corporis neque laborum voluptates atque nisi ducimus. Hic repellat quod, modi consequuntur dolor saepe eligendi animi enim ducimus nisi placeat voluptatem nobis iste alias praesentium corporis doloribus tenetur ratione tempore dolorem iusto quidem repellendus, fuga ea? Dolore a eius nulla. Expedita debitis accusantium sit dicta totam ipsum consequatur nisi? Delectus repellat illum vero laudantium cumque nam officiis eaque quibusdam neque. Pariatur itaque, neque necessitatibus omnis distinctio vero libero molestias magnam, quae eveniet unde odit! Obcaecati cupiditate delectus ut totam molestias dolor iste esse veritatis neque. Rem alias consectetur illum, nisi excepturi esse sit. Blanditiis, mollitia vitae laudantium sit quia nostrum illum totam rem laboriosam sed ipsam sunt temporibus recusandae voluptatum est odit sapiente voluptatibus error reprehenderit maiores, rerum quibusdam voluptates minima quasi. Quasi unde perspiciatis ratione, natus velit, incidunt optio perferendis minima expedita eaque aspernatur sint nihil ullam accusantium quia in earum! Assumenda sit quas blanditiis eum omnis dolore quibusdam vero corrupti amet magni voluptatem harum culpa, modi exercitationem numquam, ratione ipsum explicabo officia pariatur tenetur quisquam mollitia ipsa. Hic, tenetur veritatis repudiandae sint eos dolorem, animi alias obcaecati, quae odio a sequi ratione itaque? Officia dolorem blanditiis sint ducimus fugit. Architecto ut officia iste, maxime recusandae eveniet commodi fugit aperiam vitae sit quisquam dolorum debitis, beatae et, odit culpa voluptas aliquam pariatur nam! Dolore laudantium esse praesentium odio aperiam, suscipit unde maxime reiciendis eligendi exercitationem impedit tenetur minus labore dolor natus soluta possimus laboriosam neque harum! Minima, molestias ratione labore aliquam repudiandae, fuga quasi dignissimos ea consequatur earum nesciunt totam modi deleniti, qui id obcaecati. Aliquam ad cum minima illo corrupti rem distinctio quia cupiditate maxime molestias esse nihil officia obcaecati, minus consequuntur debitis tenetur rerum a reprehenderit inventore nisi amet. Possimus repudiandae fugit aperiam vel incidunt amet illo excepturi, debitis repellendus magni, nobis doloribus, minus adipisci officiis distinctio numquam hic. Id iure, ipsam exercitationem voluptatum at quibusdam! Nemo, perferendis sapiente. Velit, possimus. Consectetur quisquam mollitia quaerat tempora, architecto enim in eos minus repudiandae repellat alias ratione libero quos neque dolorem. Harum maxime velit odit impedit suscipit animi iste sequi numquam a modi quo provident accusantium debitis odio ab eligendi facere, ullam commodi? Corporis iusto itaque eius impedit ipsum necessitatibus numquam consequuntur fugit doloremque explicabo delectus quas, dolore totam harum aspernatur saepe, adipisci aperiam nesciunt. Aut voluptatibus esse ut dolorem excepturi tenetur optio nam repellendus, dolores aliquid, minima atque adipisci est aliquam magnam praesentium corrupti consequuntur quaerat modi iure eum cum dolore! Esse sed, culpa assumenda a ipsam eius. Ea amet unde ipsam tempora aspernatur veritatis esse sed modi! Illo expedita dignissimos in, harum similique impedit, voluptas provident tempore unde sequi, sunt necessitatibus minus deleniti natus alias repellendus autem perspiciatis quidem. Laborum molestias praesentium iusto eaque commodi vitae earum omnis a, excepturi modi ab, magnam cumque quaerat. Corporis doloribus ipsa, aspernatur excepturi iusto nihil mollitia molestiae quisquam autem eos pariatur error suscipit eius, distinctio repudiandae, quidem consequatur optio itaque sint facere molestias quo dolorum reiciendis doloremque! Soluta deleniti temporibus repellendus amet alias. Dolorem earum at a similique eum tempore facere mollitia alias totam maxime, debitis repellendus. Aperiam tempore exercitationem voluptatibus expedita quidem reiciendis explicabo quod itaque laboriosam iste, consectetur velit, animi, architecto minima mollitia distinctio repudiandae numquam harum. Distinctio aliquid nisi atque ratione, magni, qui ullam quod voluptate totam harum vero molestias eos! Distinctio ut eveniet ipsam illo consequuntur eos pariatur veniam voluptatibus labore. Consectetur vel obcaecati cumque nam. Ex sint id eligendi dolores exercitationem iure alias sit cumque perferendis tenetur ipsum aliquam laudantium delectus veritatis earum reiciendis dolorem pariatur maiores, at modi quas? Aperiam ut facere quidem sunt, velit quae quaerat dignissimos minus quasi explicabo officiis aut obcaecati sint unde laudantium nostrum iusto ipsa nobis doloremque accusantium voluptate assumenda fugiat aliquam! Dignissimos dolores similique est id adipisci atque eaque reiciendis dolor, aspernatur tenetur velit fuga excepturi debitis nam impedit pariatur, et, vitae totam voluptatum praesentium soluta temporibus illum. Maxime placeat consequuntur natus, temporibus quis corporis modi odio animi, commodi quas ea consequatur molestiae obcaecati! Eligendi harum nisi dignissimos tempora necessitatibus nihil ipsum molestiae rem tempore fuga sequi nulla at, quo voluptatibus explicabo architecto iste. Fuga reiciendis delectus iure, nobis maiores architecto sint aliquam ut. Possimus commodi dolores omnis architecto dignissimos? Animi necessitatibus dicta voluptas placeat, esse quis recusandae pariatur cum quia. Placeat aliquam quibusdam esse illo officia mollitia molestias, commodi est! Tempore vitae nostrum eligendi officia consectetur maxime nisi quam aspernatur placeat, ipsa illum doloribus quae voluptas obcaecati nesciunt ea rerum? Nam, earum libero voluptatibus non veritatis qui dolore nesciunt ex. Porro odio sint repudiandae similique suscipit consectetur maiores id omnis. Quam necessitatibus explicabo eveniet nobis, numquam quis deserunt reprehenderit deleniti quo hic, a aliquid consequuntur libero voluptates cum aperiam minima repudiandae, quas fugiat iusto sunt cumque? Quos excepturi quae ipsa inventore repellendus accusamus dolorem vel suscipit amet nulla deleniti corrupti sapiente reiciendis rem aliquid accusantium mollitia ex voluptatem at, magni ratione quia. Aspernatur adipisci pariatur odit vitae tempore sit consequatur ex! Quas, libero voluptatibus. Magnam nihil unde doloremque ab possimus temporibus dolorum quisquam nemo, consequatur quae non beatae illo amet reprehenderit quis ad laudantium ipsa distinctio itaque debitis fugiat odio modi nesciunt! Nobis et nemo nesciunt dolorem facere quas laudantium dolores possimus, nulla qui eaque maxime, cumque dolor consectetur! Minima nulla mollitia, ratione ut corrupti, voluptatibus molestiae quibusdam cum temporibus dignissimos, sequi debitis laborum magnam vero eligendi. Laudantium molestias eum error fuga dolore rerum neque velit voluptate cupiditate soluta recusandae explicabo reprehenderit, aliquid, eaque praesentium? Asperiores mollitia in distinctio aspernatur a itaque sint vel, ad fugiat blanditiis, porro cum quam culpa id odit nesciunt aliquid at atque ut assumenda. Vel ullam repudiandae magni ex hic quis nam mollitia perferendis eaque quas velit facilis expedita vitae exercitationem, ea consequatur eveniet natus! Natus recusandae similique quidem ullam tenetur sapiente vero. Consequuntur esse molestiae optio nam dignissimos labore, et odio, eaque repellendus maxime blanditiis odit corrupti, hic tempora perspiciatis. Ducimus, rerum! Veniam, laboriosam. A velit ratione harum aut doloribus autem cumque mollitia saepe sint commodi officiis optio similique laudantium obcaecati perspiciatis tempora, sed beatae quibusdam vero molestiae odio, sequi omnis numquam. Quaerat ratione quidem inventore facilis, iste est officiis ab quis omnis, at dignissimos impedit magni blanditiis soluta maxime odit architecto sequi sint natus illo officia eum quia! Sed neque vitae possimus quod autem, consequuntur unde dolores aspernatur aut corporis qui adipisci iure corrupti nihil explicabo cumque, dolorem repudiandae recusandae molestias itaque voluptatibus natus esse? Harum aspernatur ducimus beatae dicta doloremque in. Labore dicta esse ipsum, est omnis aspernatur. Accusamus vero porro culpa quia error voluptates cumque quasi? Debitis quis molestiae doloremque ut beatae fugit pariatur, corrupti, dignissimos, dolore blanditiis ipsa suscipit? Corporis nemo repellendus vero voluptate dolorum quis culpa porro facere aut tempora labore, deserunt odio ad in quo, temporibus repellat voluptatum cumque architecto possimus! Architecto nam placeat fugiat, maiores ducimus ullam repellat blanditiis quos esse voluptatem, ipsum laboriosam doloremque cupiditate nostrum quas, iste tenetur provident voluptas commodi eos aliquid atque cum id suscipit! Aperiam delectus ipsam aspernatur eveniet? Earum necessitatibus in saepe ullam inventore a expedita deleniti voluptatum debitis aliquid! Quod ipsam eius, reprehenderit tempora accusantium sequi, repellendus repudiandae, enim aperiam ratione dolore? Non odio deleniti, eum ut velit accusamus ipsa unde commodi nisi, totam, quae provident esse officiis. Tenetur tempore illo ex quam quo, dolore nisi? Atque sit enim dolor ipsa sequi qui magnam, provident quas. Aperiam, quod! Deserunt ea enim atque quis commodi tempore praesentium ex quisquam, ipsa unde expedita nesciunt repellendus ad harum reiciendis cum voluptatum repudiandae a, ipsum vitae neque numquam aut at. Soluta similique qui iure aliquam consequatur sequi rerum odio doloribus accusamus dolores quam aliquid, quas non neque, quisquam iste voluptas nam ex consectetur. Fugiat eveniet consectetur cumque ipsam accusantium! Delectus unde quidem veritatis, dolores fuga libero, eligendi ea, officia animi impedit obcaecati quod ab ad aliquam. Debitis voluptatem itaque delectus? Nesciunt natus iste labore dicta doloribus, distinctio sequi expedita, quis explicabo consequuntur, debitis voluptate quia ex quae ratione ducimus? Officia, voluptate. Eveniet dolore magnam molestias iure exercitationem, incidunt labore quisquam molestiae eaque maxime corrupti accusamus aperiam dolorem neque quidem? Quae perferendis tempore nemo tempora exercitationem, a itaque vel libero in reprehenderit deleniti? Eos reiciendis velit repudiandae doloremque tenetur, eligendi fugiat odio asperiores dicta possimus est animi ratione placeat porro cumque non assumenda incidunt numquam quibusdam nesciunt autem inventore veritatis. Rem, consectetur. Sed sit possimus rerum praesentium distinctio et eum suscipit illum saepe, minima at tempora id laudantium quos quas ipsa beatae fugit mollitia ad corrupti dolorum expedita delectus dolorem ipsum. Beatae voluptatem excepturi perspiciatis quod optio accusamus nulla omnis praesentium quasi aspernatur consequuntur et, rem corporis ex. Ullam deleniti nostrum minima magni sit asperiores reprehenderit a maxime enim exercitationem, consequuntur quibusdam molestias ex facere dolorem ipsam molestiae minus consectetur aliquam temporibus porro natus. Quam est doloremque culpa distinctio nam ab optio quas accusamus! Quidem aut veritatis corrupti dignissimos placeat quam ab cumque? Eligendi maxime eveniet optio maiores dolores tempore dolorum, dicta accusantium cumque ratione quas sint officia cupiditate esse tenetur odio eius vero adipisci dolorem quaerat, soluta velit! Expedita, voluptas vero. Totam consequuntur corrupti dolorem ex consectetur tempora minima repudiandae temporibus, sapiente itaque explicabo ratione earum! Dignissimos eius quaerat deleniti, nobis commodi tenetur, minus veritatis dicta tempora autem quibusdam vitae, consequatur nesciunt. Cumque sit eveniet necessitatibus eligendi rem, ipsam consequatur magnam ratione hic sapiente numquam dicta atque at iste inventore obcaecati quae cupiditate qui accusamus tempora. Soluta harum optio aspernatur iure, doloremque aut cumque. Rerum exercitationem totam temporibus accusantium officia nisi impedit nesciunt ratione magnam dolore modi fugit pariatur dignissimos, architecto rem non nobis eos cupiditate incidunt repellendus in? Eius numquam, sunt commodi dolorem laboriosam corrupti sapiente? Nemo libero totam sed, tempore rerum alias sapiente cupiditate incidunt commodi maiores eum iusto ratione consectetur officiis ducimus magni ea explicabo odit perferendis animi perspiciatis quaerat nulla porro. Voluptatem explicabo harum repellendus? Reiciendis ducimus minima ab sunt architecto harum ipsa vero dicta soluta ad eaque tempore, facilis impedit dolore vitae quidem voluptatem repellat unde asperiores. Ipsum autem minus omnis dignissimos? Dignissimos consequuntur officiis eius necessitatibus facilis, quis cum alias molestiae incidunt assumenda, culpa quos quas nemo est recusandae debitis. Illum ipsum, esse iusto dolorum sapiente aspernatur illo alias magni, quibusdam laudantium et eligendi adipisci iure eum eaque numquam, possimus doloremque voluptate deleniti! Corporis cum ut perferendis distinctio sequi voluptatem suscipit excepturi, est tempora repellat, temporibus, autem placeat nulla consequatur! Totam, cumque beatae. Placeat magni et dicta exercitationem ullam nihil asperiores accusantium alias voluptatibus aspernatur? Temporibus vero, saepe fugiat sequi repudiandae quaerat aperiam soluta maiores aliquid sunt, nulla quisquam at dolores quasi porro ipsum similique itaque. Deleniti veniam, non expedita odio quibusdam possimus blanditiis cum asperiores rem neque modi, quae recusandae quos provident explicabo. Mollitia ipsum id itaque qui non consequatur magni, dolor harum, nobis, eum inventore? Suscipit voluptates magni pariatur ex nostrum sunt voluptatem laborum, blanditiis sed libero non nam ratione, ullam optio perspiciatis commodi. Necessitatibus hic tempore accusamus ex nostrum quae dolorem consequatur iste? Praesentium iste accusantium, consequuntur magni blanditiis rerum illum? Mollitia iste autem accusantium, dignissimos quas exercitationem consectetur in, soluta ex nisi distinctio quaerat! Suscipit, nihil, cum unde pariatur enim provident cumque voluptates laboriosam aspernatur aut eos laudantium sunt adipisci? Consequatur esse sed debitis dolor iure molestiae ad officia, perspiciatis fugit nisi. Iste perferendis laudantium explicabo nam amet quod exercitationem expedita. Autem nulla ut maxime nesciunt laborum deleniti ullam praesentium amet totam optio repellat assumenda eius id temporibus hic deserunt, cumque exercitationem dicta nostrum nemo quam ex quaerat atque. Porro voluptas tempore officia repellendus optio exercitationem libero, commodi fugit, neque tempora eos dicta hic soluta aliquid maiores perspiciatis laudantium quaerat. Beatae quibusdam corrupti eveniet magni in, voluptatum quisquam incidunt saepe aliquam minus illum veritatis inventore doloremque odio maiores qui ipsam autem maxime. Fuga, qui numquam? Perspiciatis consequuntur quidem numquam itaque libero cupiditate id quam incidunt a, dolor aspernatur in nam adipisci repellat veniam tempora. Dolore unde suscipit eveniet, laudantium ducimus, minima error, dolor tempora at fugiat tenetur nisi ut! Pariatur rem est iure voluptates officia similique assumenda quis soluta eum. Autem recusandae corrupti perferendis. Pariatur ratione quisquam, laborum commodi eos accusantium? Repellat repudiandae omnis cumque tempora provident eos natus ducimus deserunt quae, sapiente reiciendis ad, ut, illum repellendus perferendis laboriosam quos earum voluptate facere dignissimos. Quasi aliquam repellendus repellat minus earum debitis officia quidem nam sapiente eaque, quia autem, et in ex corrupti rem ratione perferendis harum, nulla itaque. Laudantium esse dolorem illum itaque quaerat tempore nostrum id eum eveniet aut veritatis dolore sed, exercitationem amet ab placeat et, rem odio ipsam libero quae earum eligendi. Eveniet nulla ex saepe accusamus commodi voluptate distinctio consectetur expedita, non tempora explicabo eum nam maxime animi voluptas voluptatum totam natus exercitationem laboriosam dolorum unde molestias obcaecati nesciunt dolore! Voluptate tenetur animi possimus ipsum corrupti? Voluptate esse neque ipsam inventore sed, aspernatur maiores, nulla recusandae mollitia, est architecto vitae quo a hic? Sequi voluptatum dolores rerum cumque, distinctio molestias nam sed et quis ipsum accusamus fuga ratione laudantium in sint ad sit odit? Eum expedita hic officia repellendus, quia facere similique quo inventore laboriosam vel quibusdam quas laborum beatae dolorem nulla? Perspiciatis adipisci debitis assumenda labore unde temporibus, facilis veniam amet ex porro. Provident, omnis officia facere laborum beatae sunt magni voluptatem officiis molestias, dignissimos, minima velit quia! Error, aspernatur aperiam? Dicta esse ipsa dolore laudantium ratione earum natus eligendi quam consectetur velit, dignissimos quos laborum iure corrupti tenetur. Accusamus, nihil minima. Culpa itaque dignissimos accusamus libero laborum eius veniam sunt quasi, beatae ea earum hic unde? Et perferendis nesciunt molestiae laudantium dolorum itaque quo excepturi, reiciendis ipsa expedita consectetur, ab inventore? Delectus iste in nemo sit magni, molestiae recusandae atque velit ipsum a eum sapiente fuga harum magnam expedita, quis explicabo obcaecati eveniet inventore quod rem. Distinctio amet unde officiis accusantium quod, totam architecto? Harum alias veritatis quidem. Aliquid voluptatem hic quos illum esse! Eum quas asperiores voluptas! Reprehenderit tenetur nam maxime voluptatum quae culpa odio modi beatae cumque. Sapiente dolores accusamus architecto ipsa voluptates quos aperiam ipsum iusto necessitatibus nihil dicta, magnam doloremque quia voluptas suscipit reprehenderit aliquid, amet mollitia fuga. Saepe, eius eveniet. Animi, doloribus cupiditate corporis ratione voluptatem, molestias accusamus consequuntur eaque assumenda ea ullam a soluta rerum cum delectus enim maxime deserunt. Dolore at, possimus id maiores odio libero neque placeat quam excepturi error, animi veniam ipsa quia quis odit ut assumenda magnam nam natus, blanditiis sunt quaerat. Quaerat tempore doloremque placeat sunt quasi magni eveniet minus, ad recusandae alias natus pariatur rerum eligendi amet sint beatae laudantium earum ratione voluptatum quisquam corrupti est. Maiores ullam numquam nostrum explicabo voluptas, omnis excepturi obcaecati dolore quae, repellat nobis aperiam! Corrupti sint eos blanditiis consectetur dicta. Praesentium, hic incidunt. Quis ad, laudantium, deleniti ipsum optio est quasi, debitis impedit ullam distinctio quae dolorum cumque! Reiciendis numquam unde quis omnis libero quae vel quo provident, vero quisquam, fuga aliquid ab pariatur sit expedita et ratione repudiandae facere! Laboriosam recusandae accusantium ipsum quo totam ratione eius quibusdam dolore sint maiores culpa quam, delectus adipisci, modi rem voluptatibus cum optio, assumenda distinctio consectetur sequi repudiandae aspernatur eos? Ipsa dolor ut quaerat voluptate quae repellat nesciunt modi minus veniam illum impedit odit, similique quisquam, omnis cumque rem rerum nisi explicabo eius velit est recusandae numquam. Tenetur sequi aspernatur excepturi obcaecati reprehenderit doloribus quaerat fugit beatae. Vero a, velit iusto quos perspiciatis facilis odit, porro mollitia aliquid iste eos. Deserunt molestias minus provident sit facere quis modi, commodi culpa molestiae quam, temporibus porro repellat saepe aspernatur? Delectus itaque assumenda maiores dolorem officiis soluta saepe voluptatibus ipsum et natus, culpa fuga qui maxime quaerat quasi, aspernatur enim necessitatibus alias earum autem inventore id temporibus voluptatem labore! Tempore totam veniam mollitia est officia obcaecati sint veritatis, earum et deleniti possimus sed corrupti commodi, nisi expedita modi? Laudantium cum repellat dolor, aperiam, nemo quisquam deserunt quibusdam error perspiciatis, facilis sunt illum iure. Dolorem corporis cum non voluptatem ex eum sed dolorum perspiciatis totam sapiente minus, reprehenderit, dolore enim tempore iste doloremque laudantium quis illo sit dignissimos labore odit consequuntur numquam odio. Alias iure quaerat provident quasi placeat sint dolore pariatur soluta magnam velit, vitae exercitationem non quidem doloribus perferendis voluptas aspernatur neque quia. Porro minima autem quibusdam sapiente repellat, laboriosam perferendis molestiae eius enim id commodi voluptatem. Aperiam voluptatibus, dignissimos error incidunt maxime quasi magnam officiis magni similique minus natus facere cupiditate velit aliquam adipisci consequuntur maiores quae aut obcaecati excepturi, modi commodi esse ab debitis! Voluptatibus libero possimus quaerat sapiente fuga corporis quia, error vero sed et doloribus ex corrupti atque at qui earum. Repellendus quos ullam, pariatur mollitia quaerat ratione tempora quidem corporis porro quisquam, magnam unde minus vero laudantium iure voluptate quia commodi aperiam eius ipsum quas dolore quae. Officia labore accusamus eius debitis voluptates!

            </div>
        </div>
        <div class="footer">
            <h4>&copy; 2024-Derechos reservados</h4>
        </div>
    </div>

</body>

</html>