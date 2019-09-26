function family() {
    var marieEl = document.getElementById("marie");
    var juegementEl = document.getElementById("jugement");
    if (document.getElementById('sf').value == 'separe') {
        document.getElementById('sf4').style.display = 'flex';
        document.getElementById('sf5').style.display = 'none';
        marieEl.setAttribute('required','required');
        juegementEl.removeAttribute('required');
    }
    else
    if (document.getElementById('sf').value == 'divorce') {
        document.getElementById('sf4').style.display = 'none';
        document.getElementById('sf5').style.display = 'flex';
        marieEl.removeAttribute('required');
        juegementEl.setAttribute('required','required');
    }
    else {
        document.getElementById('sf4').style.display = 'none';
        document.getElementById('sf5').style.display = 'none';
        marieEl.removeAttribute('required');
        juegementEl.removeAttribute('required');
    }
}

function divorce() {
    if (document.getElementById('sf').value == 'separe' && document.getElementById('sf1').value == 'oui') {
        document.getElementById('sf5').style.display = 'flex';
    } else {
        document.getElementById('sf5').style.display = 'none';
    }
}

function logements() {
    var moisEl = document.getElementById("mois_location");
    var anneeEl = document.getElementById("annee_location");
    if (document.getElementById('vl').value == 'sdfl') {

        document.getElementById('vl1').style.display = 'none';
        moisEl.removeAttribute('required');
        anneeEl.removeAttribute('required');

    } else {
        document.getElementById('vl1').style.display = 'flex';
        moisEl.setAttribute('required','required');
        anneeEl.setAttribute('required','required');
    }
}

function logement() {


}

function secteurs_activite() {
    var priEl = document.getElementById("sp2");
    var pubEl = document.getElementById("sp7");
    var agriEl = document.getElementById("sp9");
    var indeEl = document.getElementById("sp13");
    var retraiteEl = document.getElementById("sp15");
    var autreEl = document.getElementById("sp18");


    if (document.getElementById('sp').value == 'sal_priv') {
        document.getElementById('sp1').style.display = 'flex';
        document.getElementById('sp5').style.display = 'none';
        document.getElementById('sp3').style.display = 'none';
        document.getElementById('sp6').style.display = 'none';
        document.getElementById('sp8').style.display = 'none';
        document.getElementById('sp11').style.display = 'none';
        document.getElementById('sp12').style.display = 'none';
        document.getElementById('sp14').style.display = 'none';
        document.getElementById('sp17').style.display = 'none';

        priEl.setAttribute('name','professsion');
        priEl.setAttribute('required','required');
        pubEl.removeAttribute('required');
        pubEl.removeAttribute('name');
        agriEl.removeAttribute('required');
        agriEl.removeAttribute('name');
        indeEl.removeAttribute('required');
        indeEl.removeAttribute('name');
        retraiteEl.removeAttribute('required');
        retraiteEl.removeAttribute('name');
        autreEl.removeAttribute('required');
        autreEl.removeAttribute('name');
    }
    else if (document.getElementById('sp').value == 'sal_pub') {
        document.getElementById('sp6').style.display = 'flex';
        document.getElementById('sp1').style.display = 'none';
        document.getElementById('sp5').style.display = 'none';
        document.getElementById('sp3').style.display = 'none';
        document.getElementById('sp8').style.display = 'none';
        document.getElementById('sp11').style.display = 'none';
        document.getElementById('sp12').style.display = 'none';
        document.getElementById('sp14').style.display = 'none';
        document.getElementById('sp17').style.display = 'none';

        pubEl.setAttribute('name','professsion');
        pubEl.setAttribute('required','required');
        priEl.removeAttribute('required');
        priEl.removeAttribute('name');
        agriEl.removeAttribute('required');
        agriEl.removeAttribute('name');
        indeEl.removeAttribute('required');
        indeEl.removeAttribute('name');
        retraiteEl.removeAttribute('required');
        retraiteEl.removeAttribute('name');
        autreEl.removeAttribute('required');
        autreEl.removeAttribute('name');
    }
    else if (document.getElementById('sp').value == 'agricole') {
        document.getElementById('sp8').style.display = 'flex';
        document.getElementById('sp6').style.display = 'none';
        document.getElementById('sp1').style.display = 'none';
        document.getElementById('sp5').style.display = 'none';
        document.getElementById('sp3').style.display = 'none';
        document.getElementById('sp12').style.display = 'none';
        document.getElementById('sp14').style.display = 'none';
        document.getElementById('sp17').style.display = 'none';

        agriEl.setAttribute('name','professsion');
        agriEl.setAttribute('required','required');
        priEl.removeAttribute('required');
        priEl.removeAttribute('name');
        pubEl.removeAttribute('required');
        pubEl.removeAttribute('name');
        indeEl.removeAttribute('required');
        indeEl.removeAttribute('name');
        retraiteEl.removeAttribute('required');
        retraiteEl.removeAttribute('name');
        autreEl.removeAttribute('required');
        autreEl.removeAttribute('name');
    }
    else if (document.getElementById('sp').value == 'indep') {
        document.getElementById('sp12').style.display = 'flex';
        document.getElementById('sp8').style.display = 'none';
        document.getElementById('sp6').style.display = 'none';
        document.getElementById('sp1').style.display = 'none';
        document.getElementById('sp5').style.display = 'none';
        document.getElementById('sp3').style.display = 'none';
        document.getElementById('sp14').style.display = 'none';
        document.getElementById('sp17').style.display = 'none';

        indeEl.setAttribute('name','professsion');
        indeEl.setAttribute('required','required');
        priEl.removeAttribute('required');
        priEl.removeAttribute('name');
        pubEl.removeAttribute('required');
        pubEl.removeAttribute('name');
        agriEl.removeAttribute('required');
        agriEl.removeAttribute('name');
        retraiteEl.removeAttribute('required');
        retraiteEl.removeAttribute('name');
        autreEl.removeAttribute('required');
        autreEl.removeAttribute('name');
    }
    else if (document.getElementById('sp').value == 'retraite') {
        document.getElementById('sp14').style.display = 'flex';
        document.getElementById('sp12').style.display = 'none';
        document.getElementById('sp8').style.display = 'none';
        document.getElementById('sp6').style.display = 'none';
        document.getElementById('sp1').style.display = 'none';
        document.getElementById('sp5').style.display = 'none';
        document.getElementById('sp3').style.display = 'none';
        document.getElementById('sp17').style.display = 'none';

        retraiteEl.setAttribute('name','professsion');
        retraiteEl.setAttribute('required','required');
        priEl.removeAttribute('required');
        priEl.removeAttribute('name');
        pubEl.removeAttribute('required');
        pubEl.removeAttribute('name');
        agriEl.removeAttribute('required');
        agriEl.removeAttribute('name');
        indeEl.removeAttribute('required');
        indeEl.removeAttribute('name');
        autreEl.removeAttribute('required');
        autreEl.removeAttribute('name');
    }
    else if (document.getElementById('sp').value == 'autres') {
        document.getElementById('sp17').style.display = 'flex';
        document.getElementById('sp14').style.display = 'none';
        document.getElementById('sp12').style.display = 'none';
        document.getElementById('sp8').style.display = 'none';
        document.getElementById('sp6').style.display = 'none';
        document.getElementById('sp1').style.display = 'none';
        document.getElementById('sp5').style.display = 'none';
        document.getElementById('sp3').style.display = 'none';

        autreEl.setAttribute('name','professsion');
        autreEl.setAttribute('required','required');
        priEl.removeAttribute('required');
        priEl.removeAttribute('name');
        pubEl.removeAttribute('required');
        pubEl.removeAttribute('name');
        agriEl.removeAttribute('required');
        agriEl.removeAttribute('name');
        indeEl.removeAttribute('required');
        indeEl.removeAttribute('name');
        retraiteEl.removeAttribute('required');
        retraiteEl.removeAttribute('name');
    }
    else {
        document.getElementById('sp1').style.display = 'none';
    }
}

function secteur() {
    var contratEl = document.getElementById("sp4");
    var moisEle = document.getElementById('mois_duree');
    var anneeEle = document.getElementById('annee_duree');

    if (document.getElementById('sp').value == 'sal_priv' &&
        (document.getElementById('sp2').value == 'assistant' ||
            document.getElementById('sp2').value == 'ingenieur' ||
            document.getElementById('sp2').value == 'agent_sec' ||
            document.getElementById('sp2').value == 'cadre_moy' ||
            document.getElementById('sp2').value == 'cadre_sup' ||
            document.getElementById('sp2').value == 'chauf_livre' ||
            document.getElementById('sp2').value == 'empl_bureau' ||
            document.getElementById('sp2').value == 'empl_commerce' ||
            document.getElementById('sp2').value == 'ouvrier' ||
            document.getElementById('sp2').value == 'rep_salarie' ||
            document.getElementById('sp2').value == 'technicien' ||
            document.getElementById('sp2').value == 'vendeur_caiss' ||
            document.getElementById('sp2').value == 'contremaitre')
    ) {
        document.getElementById('sp3').style.display = 'flex';
        document.getElementById('sp5').style.display = 'flex';
        contratEl.setAttribute('required','required');
        moisEle.setAttribute('required','required');
        anneeEle.setAttribute('required','required');
    }
    else {
        document.getElementById('sp3').style.display = 'none';
        document.getElementById('sp5').style.display = 'none';
        contratEl.removeAttribute('required');
        moisEle.removeAttribute('required');
        anneeEle.removeAttribute('required');
    }
}

function contrat() {
    var moisEle = document.getElementById('mois_duree');
    var anneeEle = document.getElementById('annee_duree');

    if (document.getElementById('sp4').value == 'cdi' ||
        document.getElementById('sp4').value == 'cdd' ||
        document.getElementById('sp4').value == 'interimaire' ||
        document.getElementById('sp4').value == 'ini_di' ||
        document.getElementById('sp4').value == 'ini_dd' ||
        document.getElementById('sp4').value == 'contrat_jeune' ||
        document.getElementById('sp4').value == 'contrat_accomp' ||
        document.getElementById('sp4').value == 'cne' ||
        document.getElementById('sp4').value == 'contrat_jeu_ent'
    ) {
        document.getElementById('sp5').style.display = 'flex';
        moisEle.setAttribute('required','required');
        anneeEle.setAttribute('required','required');
    }else{
        moisEle.removeAttribute('required');
        anneeEle.removeAttribute('required');
    }

}

function secteur_pub() {
    var contratEl = document.getElementById("sp4");
    var moisEle = document.getElementById('mois_duree');
    var anneeEle = document.getElementById('annee_duree');

    if (document.getElementById('sp').value == 'sal_pub' &&
        (document.getElementById('sp7').value == 'agent' ||
            document.getElementById('sp7').value == 'aide_soignant' ||
            document.getElementById('sp7').value == 'cadre_moy_inst' ||
            document.getElementById('sp7').value == 'cadre_sup_pro' ||
            document.getElementById('sp7').value == 'empl_agent' ||
            document.getElementById('sp7').value == 'inf_para_med' ||
            document.getElementById('sp7').value == 'corps_arme' ||
            document.getElementById('sp7').value == 'ouvr_etat')
    ) {
        document.getElementById('sp3').style.display = 'flex';
        document.getElementById('sp5').style.display = 'flex';
        contratEl.setAttribute('required','required');
        moisEle.setAttribute('required','required');
        anneeEle.setAttribute('required','required');
    }
    else {
        document.getElementById('sp3').style.display = 'none';
        document.getElementById('sp5').style.display = 'none';
        contratEl.removeAttribute('required');
        moisEle.removeAttribute('required');
        anneeEle.removeAttribute('required');
    }
}

function secteur_agri() {
    var contratEl = document.getElementById("sp4");
    var moisEle = document.getElementById('mois_duree');
    var anneeEle = document.getElementById('annee_duree');

    if (document.getElementById('sp').value == 'agricole' && document.getElementById('sp9').value == 'sal_agricole') {
        document.getElementById('sp3').style.display = 'flex';
        document.getElementById('sp5').style.display = 'flex';
        document.getElementById('sp11').style.display = 'none';
        contratEl.setAttribute('required','required');
        moisEle.setAttribute('required','required');
        anneeEle.setAttribute('required','required');
    }
    else if (document.getElementById('sp').value == 'agricole' && document.getElementById('sp9').value == 'pro_agricole') {
        document.getElementById('sp11').style.display = 'flex';
        document.getElementById('sp3').style.display = 'none';
        document.getElementById('sp5').style.display = 'flex';
        contratEl.removeAttribute('required');
        moisEle.setAttribute('required','required');
        anneeEle.setAttribute('required','required');
    }
    else {
        document.getElementById('sp11').style.display = 'none';
        document.getElementById('sp3').style.display = 'none';
        document.getElementById('sp5').style.display = 'none';
        contratEl.removeAttribute('required');
        moisEle.removeAttribute('required');
        anneeEle.removeAttribute('required');
    }

}

function independant() {
    var contratEl = document.getElementById("sp4");
    var moisEle = document.getElementById('mois_duree');
    var anneeEle = document.getElementById('annee_duree');

    if (document.getElementById('sp').value == 'indep' &&
        (document.getElementById('sp13').value == 'artisan' ||
            document.getElementById('sp13').value == 'auto_entrep' ||
            document.getElementById('sp13').value == 'chef_entrep' ||
            document.getElementById('sp13').value == 'commercant' ||
            document.getElementById('sp13').value == 'infirm' ||
            document.getElementById('sp13').value == 'intermittent' ||
            document.getElementById('sp13').value == 'pro_liberale' ||
            document.getElementById('sp13').value == 'pro_med_param' ||
            document.getElementById('sp13').value == 'vrp')
    ) {
        document.getElementById('sp5').style.display = 'flex';
        contratEl.removeAttribute('required');
        moisEle.setAttribute('required','required');
        anneeEle.setAttribute('required','required');
    }
    else {
        document.getElementById('sp3').style.display = 'none';
        document.getElementById('sp5').style.display = 'none';
        contratEl.removeAttribute('required');
        moisEle.removeAttribute('required');
        anneeEle.removeAttribute('required');
    }
}

function retraite() {
    var contratEl = document.getElementById("sp4");
    var moisEle = document.getElementById('mois_duree');
    var anneeEle = document.getElementById('annee_duree');

    if (document.getElementById('sp').value == 'retraite' && document.getElementById('sp15').value == 'retraite_prive') {
        document.getElementById('sp5').style.display = 'flex';
        document.getElementById('sp3').style.display = 'none';
        document.getElementById('sp11').style.display = 'none';
        contratEl.removeAttribute('required');
        moisEle.setAttribute('required','required');
        anneeEle.setAttribute('required','required');
    }
    else if (document.getElementById('sp').value == 'retraite' && document.getElementById('sp15').value == 'retraite_public') {
        document.getElementById('sp5').style.display = 'flex';
        document.getElementById('sp11').style.display = 'none';
        document.getElementById('sp3').style.display = 'none';
        contratEl.removeAttribute('required');
        moisEle.setAttribute('required','required');
        anneeEle.setAttribute('required','required');
    }
    else {
        document.getElementById('sp11').style.display = 'none';
        document.getElementById('sp3').style.display = 'none';
        document.getElementById('sp5').style.display = 'none';
        contratEl.removeAttribute('required');
        moisEle.removeAttribute('required');
        anneeEle.removeAttribute('required');
    }
}


$(document).ready(function(){
    var current=1,current_step,next_step,steps;
    steps = $("form").length;


    $(".previous").click(function(){
        current_step =$('.fieldfamily');
        next_step = $('.fieldmail');
        next_step.show();
        current_step.hide();
        setProgressBar(--current);

    });

    $(".next2").click(function(){

        current_step=$('.fieldfamily');
        next_step=$('.fieldlogement');
        current_step.hide();
        next_step.show();

    });

    $(".previous1").click(function(){
        current_step = $('.fieldlogement');
        next_step = $('.fieldfamily');
        next_step.show();
        current_step.hide();
        setProgressBar(--current);

    });

    $(".next3").click(function(){
        if (validatelogement()) {
            current_step=$('.fieldlogement');
            next_step=$('.fieldprof');
            current_step.hide();
            next_step.show();
        }
        else {
            return false;
        }
    });

    $(".previous2").click(function(){
        current_step = $('.fieldprof');
        next_step = $('.fieldlogement');
        next_step.show();
        current_step.hide();
        setProgressBar(--current);

    });

    $(".next4").click(function(){
        current_step=$('.fieldprof');
        next_step=$('.fieldperso');
        current_step.hide();
        next_step.show();
        setProgressBar(++current);

    });


    $(".previous3").click(function(){
        current_step = $('.fieldperso');
        next_step = $('.fieldprof');
        next_step.show();
        current_step.hide();
        setProgressBar(--current);

    });

    $(".next5").click(function(){
        current_step=$('.fieldperso');
        next_step=$('.fieldinfo');
        current_step.hide();
        next_step.show();
        setProgressBar(++current);

    });

    $(".previous4").click(function(){
        current_step = $('.fieldinfo');
        next_step =$('.fieldperso');
        next_step.show();
        current_step.hide();
        setProgressBar(--current);

    });

});



function validatemail() {
    var email;
    email = $("#email").val();
    var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;

    if (!filter.test(email)) {
        return false;
    }
    return true;
}

function validatefamily()
{
    if (document.getElementById(sf).selectedIndex == "")
    {
        return false;
        alert('Yo');
    }
    return true;
}
 