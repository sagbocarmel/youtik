@extends('layouts.master')


@section('contentservices')
   <!-- ##### Breadcrumb Area Start ##### -->
    <section class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(template_credit/img/bg-img/13.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2>{{__('Services')}}</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('home')}}">{{__('Accueil')}}</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{__('Services')}}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Special Feature Area Start ######  1Pret-->
    <section class="special-feature-area d-flex flex-wrap">
        <!-- Special Feature Content -->

        <div class="special-feature-content section-padding-100">
            <div class="feature-text" id="pret_auto">
                <!-- Section Heading -->
                <div class="section-heading white mb-50">
                    <div class="line"></div>
                    <h2>{{__('Prêt Automobile')}}</h2>
                </div>
                <p style="color: #000; font-weight: 700">{{__('Pour l’obtenir, l’emprunteur doit monter un dossier, en apportant notamment toutes les garanties à l’organisme prêteur sur sa solvabilité. Selon les organismes, les documents demandés peuvent varier mais il y a des incontournables. Pour faire une demande de crédit auto, l’emprunteur doit donc préparer tous les papiers nécessaires à l’obtention du prêt.')}} </p>
            <br>
            
               <p style="color: #000; font-weight: 700"> {{__('Crédit auto : les justificatifs d’identité')}}
            <br> 
        {{__('L’emprunteur doit renseigner le prêteur sur son identité en fournissant :')}}
        <br>
        {{__('-Une copie d’une pièce d’identité (carte d’identité ou passeport)')}}
        <br>
        {{__('-Un justificatif de domicile (facture d’énergie de moins de 6 mois ou quittance de loyer)')}} ;
        <br>
        {{__('-Une copie du contrat de mariage ou un jugement de divorce, le cas échéant, peuvent également être demandés.')}} </h6>
 
        </p>
        <br>
        <p style="color: #000; font-weight: 700"> {{__('Crédit auto : les justificatifs de revenus')}} <br>
    {{__('L’emprunteur doit prouver sa solvabilité, pour ce faire il doit fournir :')}}
        <br>
    {{__('-La copie du dernier avis d’imposition ;')}}<br>
    {{__('-Les copies des trois derniers bulletins de salaire ;')}}<br>
    {{__('-Les justificatifs de revenus autres que le salaire (rentes, allocations, etc.) ;')}}<br>
    {{__('-Un relevé d’identité bancaire (RIB ou IBAN) ;')}}<br>
    {{__('-Si d’autres crédits sont en cours, il faut également fournir les tableaux d’amortissement de ces crédits.')}}
 
    </p>
    <br>
    <p style="color: #000; font-weight: 700">
    {{__('Crédit auto : les autres documents à fournir')}} <br>
    {{__('L’emprunteur peut être amené à fournir d’autres pièces selon le type de crédit voiture choisi :')}}<br>

    {{__('-S’il s’agit d’un crédit affecté, l’emprunteur doit fournir une facture du véhicule puisque le crédit servira uniquement à régler ce montant')}};<br>
    {{__('-Si l’emprunteur choisit de faire un apport personnel, il doit alors présenter un justificatif du montant de l’apport personnel.')}}<br>
    {{__('-Si tous les documents demandés par l’organisme ne sont pas fournis,le prêteur peut choisir de ne pas accorder le crédit auto, mettant en cause l’absence de pièces justificatives.')}}
    </p>
    <br>
                    <a href="{{ route('home').'#emprunt'}}"" class="btn credit-btn btn-2 box-shadow">{{__('Demander un Emprunt')}}</a>
                </div>

            </div>

            <!-- Special Feature Thumbnail -->
            <div class="special-feature-thumbnail bg-img jarallax" 
            style="background-image: url(template_credit/img/bg-img/car.png);">
        </div>
</section>
    <!-- ##### Special Feature Area End ###### -->

    <!-- ##### Special Feature Area Start ######  2immob-->
    <section class="special-feature-area style-2 d-flex flex-wrap">
        <!-- Special Feature Thumbnail -->
        <div class="special-feature-thumbnail bg-img jarallax" style="background-image: url(template_credit/img/bg-img/21.jpg);"></div>
        
        <!-- Special Feature Content -->
        <div class="special-feature-content section-padding-100">
            <div class="feature-text" id="pret_immo">
                <!-- Section Heading -->
                <div class="section-heading white mb-50">
                    <div class="line"></div>
                    <h2>{{__('Prêt Immobilier')}}</h2>
                </div>
                <p style="color: #000; font-weight: 900">{{__('DES TAUX ATTRACTIFS :')}}<br> {{__('Un montant emprunté entre 20 000 € et 1 000 000 €.')}}</p>
                <br>
                <p style="color: #000; font-weight: 700">
                {{__('DEMANDER UN PRÊT IMMOBILIER :')}}
                <br>
                {{__('-Aucuns frais inutiles')}}
                <br>
                {{__('-Aucuns frais de dossier')}}
                <br>
                {{__('-Pas d’indemnité de remboursement anticipé')}}
                <br>
                {{__('-Le changement de date du prélèvement mensuel des échéances est GRATUIT')}}
                <br>
                {{__('-Nous n’appliquons pas d’indemnité de remboursement anticipé, sauf en cas de reprise du prêt par un établissement externe.')}}	

                </p>
                <br>
                <p style="color: #000; font-weight: 700">
                {{__('BÉNÉFICIEZ DES ATOUTS DE NOTRE OFFRE')}}
                <br>
                {{__('-Vous souhaitez conserver plus de pouvoir d’achat ? Baissez vos mensualités.')}}
                <br>
                {{__('-Vous souhaitez diminuer le coût du crédit ? Réduisez la durée de l’emprunt.')}}
                <br>
                {{__('-Vous souhaitez conserver une partie de votre épargne ? Diminuez votre apport.')}}
                </p>
                <br>
                <p style="color: #000; font-weight: 700">
                {{__('UNE SOUSCRIPTION SIMPLE, RAPIDE ET 100 % EN LIGNE')}}
                <br>
                {{__('Constituez votre dossier et suivez son avancement dans votre espace sécurisé puis signez votre offre de prêt tout cela 100 % en ligne si vous le souhaitez !')}}
                </p>
                <br>
                <a href="{{ route('home').'#emprunt'}}"" class="btn credit-btn btn-1 box-shadow">{{__('Demander un Emprunt')}}</a>
            </div>
        </div>
    </section>

     <section class="special-feature-area d-flex flex-wrap">
        <!-- Special Feature Content -->
        <div class="special-feature-content section-padding-100">
            <div class="feature-text" id="rachat">
                <!-- Section Heading -->
                <div class="section-heading white mb-50">
                    <div class="line"></div>
                    <h2>{{__('Rachat de crédit')}}</h2>
                </div>
                <p style="color: #000; font-weight: 700">{{__('Le rachat de crédit pour les fonctionnaires permet aux agents de l’Etat qui ont contracté des prêts réservés aux fonctionnaires de regrouper toutes leurs créances en une seule mensualité. Le rachat de crédit simplifie la gestion du budget, tout en réduisant le montant des mensualités.')}}</p>
            <br>
            
               <p style="color: #000; font-weight: 700"> {{__('Le crédit fonctionnaire, un emprunt réservé aux agents de l’Etat')}} </p>

               <p style="color: #000; font-weight: 700">{{__('Le crédit fonctionnaire est un produit bancaire immobilier réservé aux agents de la fonction publique d’Etat, territoriale ou hospitalière. Il est spécifiquement conçu pour permettre aux fonctionnaires, qui ne bénéficient pas du prêt 1 % employeur, de financer l’achat de leur résidence principale, qu’elle soit neuve ou ancienne, avec ou sans travaux. Le crédit fonctionnaire possède plusieurs avantages :')}}
            <br> 
        {{__('-La caution peut être prise en charge par la mutuelle professionnelle du salarié ;')}}
        <br>
        {{__('-Le montant de l’assurance est moins cher que lors d’un prêt classique ;')}}
        <br>
        {{__('Il permet à l’emprunteur de conserver ses droits à l’Aide Personnalisée au Logement (APL), s’il en dispose.')}}
 
        </p>
        <br>
<p style="color: #000; font-weight: 700"> {{__('Le taux d’emprunt du crédit fonctionnaire, quant à lui, est identique, voire légèrement plus élevé que celui du marché. Toutefois il est plafonné à 7 %. Pour en bénéficier, l’emprunteur doit d’abord disposer d’un Prêt d’Action Sociale (PAS), ou d’un prêt conventionné. Il peut ensuite effectuer une demande de crédit fonctionnaire auprès du Crédit Foncier de France, seul organisme habilité à distribuer ce produit. Les différentes mutuelles professionnelles de la fonction publique se chargent elles, de la garantie et de l’assurance du crédit pour l’emprunteur.')}}
<br>
<br>
<h6 style="color: #000; font-weight: 500">{{__('Simplifier la gestion de ses emprunts grâce au rachat de crédit')}} </h6>

<p style="color: #000; font-weight: 700">{{__('Le rachat de crédit est un moyen simple et avantageux d’optimiser la gestion de son budget, pour préserver son pouvoir d’achat ou éviter le risque de surendettement. Pour en tirer le plus grand bénéfice, il faut avoir contracté aux moins trois emprunts, comme par exemple :')}}
    {{__('-Un crédit immobilier ; ')}}<br>
    {{__('-Un crédit auto ;')}}<br>
    {{__('-Un crédit à la consommation.')}}<br> 
</p>

<br>
<p style="color: #000; font-weight: 700">
   {{__('Plutôt que d’avoir des prélèvements multiples, à diverses échéances sur son compte, un rachat de crédit permet de regrouper toutes les créances contractées en une seule mensualité. C’est particulièrement avantageux en ce qui concerne les prêts à la consommation de type revolving, qui ont des taux d’intérêts très élevés, et dont il est très difficile de se débarrasser. En regroupant tous les emprunts sous un seul taux unique comparable à celui du marché, avec une seule assurance, et en allongeant la durée de sa créance, le rachat de crédit peut permettre de diminuer le montant de ses remboursements mensuels de plus de 50 %. C’est donc une solution particulièrement efficace pour se libérer un budget mensuel supérieur, retrouver du pouvoir d’achat pour les dépenses courantes, et avoir une visibilité plus sécurisante dans le temps de ses comptes bancaires et de ses créances.')}}
</p>
<br>
<a href="{{ route('home').'#emprunt'}}"" class="btn credit-btn btn-2 box-shadow">{{__('Demander un Emprunt')}}</a>
            </div>
        </div>
        <!-- Special Feature Thumbnail -->
        <div class="special-feature-thumbnail bg-img jarallax" style="background-image: url(template_credit/img/bg-img/20.jpg);"></div>
    </section>

       

    <!-- ##### Special Feature Area End ###### -->

    <!-- ##### Special Feature Area Start ###### 3 credit inv-->
    <section class="special-feature-area style-2 d-flex flex-wrap">
        <!-- Special Feature Thumbnail -->
        <div class="special-feature-thumbnail bg-img jarallax" style="background-image: url(template_credit/img/bg-img/21.jpg);"></div>
        <!-- Special Feature Content -->
        <div class="special-feature-content section-padding-100">
            <div class="feature-text" id="fin_pro">
                <!-- Section Heading -->
                <div class="section-heading white mb-50">
                    <div class="line"></div>
                    <h2>{{__('Financement de projets')}}</h2>
                </div>
                 <p style="color: #000;  font-weight: 700;">
                 {{__('La demande en ligne est une démarche sécurisée sans engagement de votre part. Elle vous permet d’obtenir une réponse de principe immédiatement. Pour faire votre demande de crédit en ligne vous devez respecter certaines conditions, comme être majeur capable. En outre, vous devez disposez d’entrées d’argent régulières et être en mesure de régler ses mensualités.')}}
                <br>
                 {{__('Qui peut bénéficier d’un crédit chez Youtik Crédit ?')}}
            </p>
<br>
            <p style="color: #000  ;font-weight: 700;">{{__('Les crédits sont destinés aux particuliers de tous secteurs d’activités, que vous soyez fonctionnaire du secteur public ou privé, particuliers à votre propre compte, artisans, commerçants, vous exercez dans n’importe quel secteur d’activité, vous êtes la bienvenue.')}}</p><br>
                <p style="color: #000  ;font-weight: 700;">{{__('Pour tous vos besoins de financement de projets, Youtik Crédit vous ouvre ses portes grandement ouvertes. Veuillez nous faire part de votre projet, nous l’examinons et donnerons autorisation du crédit une fois votre projet jugé positivement.')}}</p><br>
                <p style="color: #000  ;font-weight: 700;">{{__('Notre objectif est de contribuer à l’amélioration de votre cadre de vie et à la réalisation de vos projets en vue de soutenir toutes personnes honnêtes en situation difficile.')}}</p>
<br>
                <a href="{{ route('home').'#emprunt' }}" class="btn credit-btn btn-1 box-shadow">{{__('Demander un Emprunt')}}</a>
            </div>
        </div>
    </section>

     <section class="special-feature-area d-flex flex-wrap">
        <!-- Special Feature Content -->
        <div class="special-feature-content section-padding-100">
            <div class="feature-text" id="cred_agr">
                <!-- Section Heading -->
                <div class="section-heading white mb-50">
                    <div class="line"></div>
                    <h2>{{__('Crédit agricole')}}</h2>
                </div>
                <p style="color: #000  ;font-weight: 700;">{{__('L’agriculture est un secteur d’activité à part. De son installation à sa retraite, l’agriculteur doit investir régulièrement pour maintenir sa productivité et les banques ne répondent pas toujours présentes. Mais une autre solution s’offre aux agriculteurs : le crédit sans banque. Cette option permet d’obtenir les fonds nécessaires sans passer par une banque.')}} </p>
            <br>
            
               <p style="color: #000; font-weight: 1000">{{__('AGRICULTEUR : DES INVESTISSEMENTS INDISPENSABLES')}}
             </p>
    
             <p style="color: #000; margin-top: 5px; font-weight: 700;">{{__('Faire vivre une exploitation agricole coûte cher. L’agriculteur a besoin d’une somme importante dès son installation pour financer l’acquisition des terres, du matériel et des bâtiments notamment. Mais ce n’est qu’un point de départ. Après plusieurs années à travailler sur l’exploitation, il lui faudra remplacer certaines machines en investissant par exemple dans une moissonneuse-batteuse ou un tracteur plus moderne et plus efficace. Les agriculteurs doivent aussi faire face aux aléas climatiques. Lors de certaines années noires, ils peuvent avoir besoin de fonds pour limiter les problèmes de trésorerie. Pour répondre à tous ces besoins, ils sont nombreux à choisir le crédit.')}}
            </p>
        <br>
        <p style="color: #000; font-weight: 1000">{{__('POURQUOI CHOISIR UN CRÉDIT SANS BANQUE ?')}}
             </p>
    
             <p style="color: #000; margin-top: 5px ;font-weight: 700; ">
             {{__('Le statut des agriculteurs peut effrayer les banques. En effet, les organismes bancaires préfèrent souvent prêter à des personnes aux revenus stables. Les agriculteurs qui souffrent des incertitudes du climat, des récoltes ou du cours des matières premières obtiennent plus difficilement des prêts. Mais d’autres possibilités existent.Le crédit sans banque est une solution de financement pour les agriculteurs. Sur le principe du financement participatif, l’agriculteur bénéficie de l’épargne de particuliers investisseurs, délestée des frais bancaires. Ce mode d’emprunt gagnant-gagnant assure un taux juste, une réponse rapide et permet d’éviter les frais cachés !')}}
            </p>
    <br>
        <p style="color: #000; font-weight: 1000">{{__('CREDIT AGRICULTEUR :SOLUTION DE FINANCEMENT POUR AGRICULTEURS')}}
             </p>
    
             <p style="color: #000; margin-top: 5px  ;font-weight: 700;">
             {{__('Vous êtes agriculteur et avez du mal à financer certaines de vos dépenses courantes, comme l’achat d’un tracteur ou d’une moissonneuse ? Le crédit à la consommation peut être une solution à votre problème. N’hésitez pas à demander conseil aux courtiers en crédit de Youtik Credit lors de votre demande de prêt agriculteur ou de votre simulation de crédit en ligne. Les conseillers en prêt de Youtik Credit, comparerons tous les taux pour votre emprunt.')}}
            </p>
    <br>
        <p style="color: #000; margin-top: 5px  ;font-weight: 700;">
             {{__('Légalement, tout citoyen  a le droit de souscrire un crédit à la consommation auprès dans une banque ou dans une société de crédit. La décision d’octroyer ou non un financement revient néanmoins à l’établissement prêteur, sur la base d’une analyse détaillée de la solvabilité de l’emprunteur. C’est donc en toute logique que les individus aux revenus réguliers et présentant une stabilité professionnelle forment l’essentiel de la clientèle des professionnels du crédit.')}}
            </p>

            <br>

              <p style="color: #000; margin-top: 5px  ;font-weight: 700;">
             {{__('D’autres profils, jugés plus "risqués", sont quelque peu écartés du marché des crédits à la consommation. Les agriculteurs font partie de cette catégorie, en raison des nombreuses incertitudes qui pèsent sur leur profession et leurs revenus.')}}
            </p>

            <br>

             <p style="color: #000; margin-top: 5px  ;font-weight: 700;">
             {{__('Cette situation n’est pas pour autant inextricable : des établissements proposent bel et bien des prêts à la consommation – différents des crédits bonifiés et autres subventions des collectivités - aux agriculteurs.')}}
            </p>

            <br>

            <p style="color: #000; margin-top: 5px  ;font-weight: 700;">
            {{__('Youtik Credit met à votre disposition l’expérience de ses courtiers si vous comptez trouver un contrat de prêt à la consommation pour agriculteur.')}}
            </p>

            <br>
              <p style="color: #000; font-weight: 1000">{{__('QUELS CONTRATS DE CREDIT POUR LES AGRICULTEURS ?')}}
             </p>
            
             <p style="color: #000; margin-top: 5px  ;font-weight: 700;">
            
             {{__('• Le prêt personnel : ce contrat peut couvrir toutes les dépenses, non liées à vos activités d’agriculteur, que vous comptez financer à crédit.')}}
            <br>
            {{__('• Le crédit renouvelable : certainement l’offre la plus courante, ce financement met à votre disposition une réserve d’argent, que vous pouvez mobiliser dès que le besoin s’en ressent.')}}
            <br>
            {{__('• Le crédit affecté : cet emprunt est destiné à une ou plusieurs opérations préalablement indiquées dans votre sollicitation de financement.')}}
            </p>

            <br>

             <p style="color: #000; margin-top: 5px  ;font-weight: 700; ">
             {{__('D’autres solutions, comme le crédit entre particuliers et le microcrédit personnel, sont également dispensées aux agriculteurs. Les conditions du prêt diffèrent toutefois de celles appliquées aux autres emprunteurs jugés plus fiables selon les critères des banques.')}}
              <br>
              {{__('L’aide d’un courtier spécialisé, comme Youtik Credit, s’avère dès lors indispensable pour décrocher un financement personnel à des conditions raisonnables.')}}
            </p>
            <br>
                    <a href="{{ route('home').'#emprunt'}}"" class="btn credit-btn btn-2 box-shadow">{{__('Demander un Emprunt')}}</a>
                </div>

            </div>
            <!-- Special Feature Thumbnail -->
            <div class="special-feature-thumbnail bg-img jarallax" 
            style="background-image: url(template_credit/img/bg-img/20.jpg);">
        </div>
</section>

    <!-- ##### Special Feature Area End ###### -->




    <!-- ##### FAQ Area Start ###### -->
    <section class="credit-faq-area section-padding-100-0">
        <div class="container">
            <div class="row">

            <!-- Add Area -->
                <div class="col-12 col-md-6">
                    <div class="add-area mb-100">
                        <h1>{{__('FAQ')}}</h1>
                        <br><br><br>
                        <p>{{__('Retrouvez les questions qui sont courantes afin de mieux vous imprégnez des différentes procédures et méthodes.')}}
                           <br> {{__('Pour plus d’informations,')}}
                            <a href="{{ route('contact')}}">{{__('Ecrivez-nous')}}</a>
                        </p>
                    </div>
                </div>


                <!-- FAQ Area -->
                <div class="col-12 col-md-6">

                    <div class="accordions mb-100" id="accordion" role="tablist" aria-multiselectable="true">
                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6><a role="button" class="" aria-expanded="true" aria-controls="collapseOne" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                {{__('Comment faire pour avoir mes fonds le plus rapidement possible ?')}}
                                    <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                    <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                    </a></h6>
                            <div id="collapseOne" class="accordion-content collapse">
                                <p>
                                    {{__('Le crédit en ligne est un moyen d’accélérer le processus, mais pour obtenir les fonds le plus rapidement possible, voici quelques conseils simples tirés de notre expérience du traitement de dizaines de milliers de dossiers de crédit : ')}}<br>
                                {{__('-Tout d’abord, importez vos pièces justificatives directement sur l’interface de téléchargement des documents')}}
                             <br>{{__('-Vérifiez que votre dossier est parfaitement complet, c’est-à-dire qu’il contient toutes les pièces justificatives demandées (soyez particulièrement vigilant à cela !).')}}
                                <br>{{__('-Par la suite, signez électroniquement votre contrat en renseignant votre numéro de téléphone personnel afin de confirmer la signature. Une fois votre dossier étudié, vous recevrez les fonds en un temps record (après acceptation définitive de votre dossier et dans le respect du délai légal de rétractation) !')}}

                                </p>
                            </div>
                        </div>
                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6>
                                <a role="button" class="collapsed" aria-expanded="true" aria-controls="collapseTwo" data-parent="#accordion" data-toggle="collapse" href="#collapseTwo">

                                    {{__('Si ma demande de crédit est pré-acceptée, que se passe-t-il ?')}}
                                        <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                        </a>
                            </h6>
                            <div id="collapseTwo" class="accordion-content collapse">
                                <p>
                                {{__('Une fois votre demande pré-acceptée, vous devez poursuivre les étapes suivantes afin d’obtenir votre crédit.')}} <br>
                                {{__('- Importez vos documents en ligne en utilisant notre agrégateur bancaire (plus rapide) ou en important manuellement vos documents.')}} 
                                <br>{{__('- Une fois vos documents importés, vous serez invité à signer électroniquement votre contrat. Pour cela vous devez renseigner votre numéro de téléphone personnel afin de confirmer la signature.')}}
                                <br>{{__('- Ensuite, votre dossier sera envoyé à nos équipes d’analystes. Nous étudierons votre dossier, et vous recevrez les fonds en un temps record après acceptation définitive de votre dossier et dans le respect du délai légal de rétractation.')}}

                                </p>
                            </div>
                        </div>
                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6>
                                <a role="button" aria-expanded="true" aria-controls="collapseThree" class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseThree">
                                    {{__('Combien peut-on emprunter ? Sur quelle durée ?')}}
                                        <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                    </a>
                            </h6>
                            <div id="collapseThree" class="accordion-content collapse">
                                <p>
                                    {{__('- Empruntez auprès de notre communauté d’investisseurs pour l’ensemble de vos projets entre 2 000€ et 10 000 000€.')}} 
                                    <br>{{__('- Nous proposons des durées d’emprunt selon vos choix, vos mensualités etc.')}}
                                    <br>{{__('- Vous aviez entre 6 mois et 25 ans pour le remboursement de nos crédits, vérifier vos capacités financières avant de vous engager car un prêt doit être rembourser.')}} 
                                    <br>{{__('- De plus nous offrons tous type de crédit (immobilier, particulier, automobile, financement de projet, rachat de crédit...)')}}

                                </p>
                            </div>
                        </div>

                           <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6>
                                <a role="button" aria-expanded="true" aria-controls="collapseFour" class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseFour">
                                    {{__('Comment signer en ligne ?')}}                                   
                                     <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                    </a>
                            </h6>

                            <div id="collapseFour" class="accordion-content collapse">
                                <p>
                                 {{__('Pour accéder à la signature électronique, vous devez d’abord importer tous vos documents en ligne. Une fois que ce sera fait, vous aller accéder à la page de signature électronique.')}}
                                  <br>

                                </p>
                                <p>
                                  {{__('Etape 1 : importez vos pièces justificatives')}}
                                  <br>
                                  {{__('Assurez-vous d’ajouter l’ensemble des pièces demandées et que celles-ci soient nettes et non tronquées. Pour ajouter une pièce, cliquez sur le bouton « ajouter » puis choisissez la pièce à importer :')}}
                                        <br>
                                    {{__('- En la sélectionnant sur votre ordinateur / tablette / téléphone')}} <br>
                                    {{__('- En la prenant en photo depuis votre téléphone portable / tablette')}}
                                </p>
                                <p>
                                  {{__('Etape 2 : vérifiez votre mail')}}
                                  <br>
                                  {{__('Afin de valider la signature de votre contrat et de votre mandat de prélèvement, un mail vous sera envoyé avec un code de validation.')}}
                                </p>

                                 <p>
                                  {{__('Etape 3 : lisez votre contrat')}}
                                  <br>                                  
                                {{__('Lisez attentivement votre contrat. Puis faites défiler votre contrat avec la barre de navigation ou cliquez sur la flèche en haut à droite du contrat pour vous rendre en bas de page.')}}

                                </p>  
                                
                                
                                <p>{{__('Etape 4 : cochez les clauses de consentement')}}</p>


                                <p>{{__('Etape 5 : renseignez le code que vous avez reçu par mail et cliquez sur "Signer" pour signer votre contrat')}}</p>

	
                                <p>{{__('Etape 6 : Votre dossier est envoyé à nos équipes d’analystes')}}
                                    <br>
                                {{__('Assurez-vous d’avoir téléchargé toutes les pièces nécessaires à l’étude du dossier, d’avoir signé votre contrat et votre mandat.')}}
                                <br>    {{__('Puis Cliquez sur « Envoyer » en bas de la page afin d’envoyer votre dossier à notre équipe d’analystes.')}}  
                                </p>

                            </div>
                        </div>
                    </div>
                </div>

                
            </div>
        </div>
        
    </section>
    <!-- ##### FAQ Area End ###### -->
@endsection