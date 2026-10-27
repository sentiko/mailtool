<?php

$p_id =  '11-7';
$p_subject =  'Tu lata ZYN a $45 MXN con tu cupón de Spin Premia.';
$p_preheader =  'Válido en 3 mg y 6 mg. Presenta tu código en caja.';
$p_yy =  '26';
$p_mm =  '10';
$p_dd =  '19';
$p_name4folder =  'p11';
$p_name4json =  'zyn-cupon';
$p_name4folderDCE =  'NA';
$p_mailname4DCE =  'ZYN_CUPON';
$p_customerkey_DCE =  'NA';
$p_name4folderFSH =  'NA';
$p_mailname4FSH =  'ZYN_CUPON';
$p_customerkey_FSH =  'NA';
$id_FSH_folder =  'NA';


//-----------------------------------------

$companyBrand     = "spin";
$product          = "zyn";

switch ( (string)$companyBrand ){
    case 'spin':
        // $companyBrand  = "spin";
        if ($product == "zyn")
            $TwigTemplate = "spin-zyn-2026-v1.twig";
        else
            $TwigTemplate = "spin-2026-v1.twig";
        $bgColor          = "#FFFFFF";    // Don't use "transparent"
        break;
    case 'zyn':
        // $companyBrand  = "zyn";
        $TwigTemplate     = "zyn-2025-v1.twig";
        $bgColor          = "#FFFFFF";    // Don't use "transparent"
        break;
    case 'cz':
        // $companyBrand  = "cz";
        $TwigTemplate     = "clubzero-2025-v1.twig";
        $bgColor          = "#FFFFFF";    // Don't use "transparent"
        break;
    case 'ic':
        // $companyBrand  = "ic";
        $TwigTemplate     = "clubzero-2025-v1.twig";
        $bgColor          = "#FFFFFF";    // Don't use "transparent"
        break;
    default:
        // $companyBrand  = "pmi";
        $TwigTemplate     = "iqos-2024-v1.twig";
        $TwigTemplate_OLD = "pmi-Brand-World-B01-600-v01.twig";
        $bgColor          = "#FFFFFF";    // Don't use "transparent"
        break;
}
// $bgColor          = "#0d0c12";    // Dark mode IQOS

//-----------------------------------------


$requiredBlocks = array(
    "spin-zyn-header",    
    "spin-hero-img",        // 2611-7-hero.gif 
                            // Tu sabor favorito a $45 MXN con tu cupón de Spin PRemia en OXXO.
                            // https://cloud.saborsinhumo.com/

    "spin-zyn-greeting",    // 
    "spin-zyn-txt",         // Elige entre varios sabores para cada momento y la intensidad que prefieras, 3 mg o 6 mg.<br><br><span style=\"color:#01a9e0;font-weight:700;\">Con tu cupón, la lata cuesta</span><span style=\"color:#01a9e0;font-weight:700;\">$45 MXN.</span>
                            // Elige entre varios sabores para cada momento  y la intensidad que prefieras, 3 mg o 6 mg.  Con tu cupón, la lata cuesta $45 MXN.

    "spin-zyn-cta",         // Conoce más	
                            // https://cloud.saborsinhumo.com/

    "spin-img",             // BLOQUE 1 CUPON
                            // 2611-7-bloque1.png
                            // Presenta este código en caja y lleva una lata por $45 MXN. Aplica solo en 3 mg y 6 mg
    
    "spin-zyn-txt",         // ¿Cómo usar tu código?

    "spin-img",             // BLOQUE2 
                            // 2611-7-bloque2.png
                            // Acude a tu tienda OXXO participante más cercana.

    "spin-img",             // BLOQUE3 
                            // 2611-7-bloque3.png
                            // Elige tu sabor favorito y la intensidad que prefieras (3 mg o 6 mg).

    "spin-img",             // BLOQUE4
                            // 2611-7-bloque4.png
                            // Muestra el código en caja.

    "spin-zyn-cta",         // Localizar tienda	
                            // https://cloud.saborsinhumo.com/#store-locator

    "spin-zyn-txt",         // *Disponible en tiendas Oxxo participantes.
    "spin-zyn-txt",         // Este producto no es libre de riesgo, contiene nicotina la cual es adictiva. Solo para mayores de 18 años.

    "spin-zyn-footer-img",  //
    "spin-zyn-footer",      // Consulta términos y condiciones en zyn.com. ZYN es un producto que contiene nicotina, la cual es altamente adictiva. Venta exclusiva para mayores de 18 años. El etiquetado y empaque puede variar en punto de venta. Vigencia del 15 de octubre al 4 de noviembre de 2026. Consulta productos participantes en tienda. No aplica con otras promociones. Aplican restricciones.
    ""

    // IMG HEADER       https://cloud.saborsinhumo.com/
    // Conoce más       https://cloud.saborsinhumo.com/
    // Localizar tienda https://cloud.saborsinhumo.com/#store-locator

);

// MODULOS PARA TEMPLATE spin-premia-2026-v1.twig
$requiredBlocks_spinpremia_iqos = array(
    "spin-header",    
    "spin-hero-img",        // 1
    "spin-greeting",        // 
    "spin-txt",             // 
    "spin-img",             // 2
    "spin-cta",             //
    "spin-iqos-footer-img", //
    "spin-footer",          // 
    ""
);
// MODULOS PARA TEMPLATE spin-zyn-2026-v1.twig
$requiredBlocks_spinpremia_zyn = array(
    "spin-zyn-header",    
    "spin-hero-img",        // 1
    "spin-zyn-greeting",    // 
    "spin-zyn-txt",         // 
    "spin-img",             // 2
    "spin-zyn-cta",         //
    "spin-zyn-footer-img",  //
    "spin-footer",          // 
    ""
);




/*
BAD CHR : "", "	"
" ",
--------------------
--------------------
url para mandar SMS:
    https://cutt.ly/59uY4Ga
Shortlink points to:
    sms://+525592253374
--------------------
PRECIO TACHADO:
<span style=\"text-decoration:line-through;color:#00d1d2;\">
   <span style=\"color:#34303d;\">
   &nbsp;$1,399 MXN&nbsp;
   </span>
</span>
********************************************************************
********************************************************************

++---------------------------------++
||  rojo                           ||      
||  #fe282a                      ||  
||  azul                           ||  
||  #01a9e0                      ||  
||   COLOR TURQUESA Brand World    ||
||   #00d1d2                     ||
||   COLOR SLATE  Brand World      ||
||   #34303d                     ||
||   Naranja                       ||
||   #e3813b                     ||
||   GRIS CLARO                    ||
||   #faf7f4                     ||
++---------------------------------++


===================================================================
<span style=\"color:#00d1d2;font-weight:700;\"></span>
font-style: italic;
===================================================================
<span style=\"color:#00d1d2;font-weight:700;font-size:24px;\"></span>
===================================================================
<span style=\"font-size:24px;font-weight:700;\"></span>
===================================================================
<a href=\"LINK\" style=\"text-decoration:underline;\" target=\"_blank\">TEXTO</a>
===================================================================
<span style=\"font-size:12px;\"><sup>(1)</sup></span>
<span style=\"font-size:12px;\"><sup>(2)</sup></span>
<span style=\"font-size:12px;\"><sup>(3)</sup></span>
<span style=\"font-size:12px;\"><sup>(4)</sup></span>
<span style=\"font-size:12px;\"><sup>MXN</sup></span>
===================================================================
<span style=\"font-size:12px;\"><sup class=\"sup_20\">(1)</sup></span>
<span style=\"font-size:12px;\"><sup class=\"sup_20\">(2)</sup></span>
<span style=\"font-size:12px;\"><sup class=\"sup_20\">(3)</sup></span>
<span style=\"font-size:12px;\"><sup class=\"sup_20\">(4)</sup></span>
<span style=\"font-size:12px;\"><sup class=\"sup_20\">MXN</sup></span>
===================================================================
    LINKS COMUNES IQOS
Conoce más               https://www.iqos.com/mx/es/descubrir.html
Comprar ahora            https://www.iqos.com/mx/es/discover-heated-tobacco/comprar-dispositivos.html
Probar IQOS              https://www.iqos.com/mx/es/prueba-iqos.html
Siguenos IG              https://www.instagram.com/iqos_mx/
Localizador de tiendas   DESDE JUN 2025
                         https://conoce-iqos.com/localizador-tiendas/
~~~~~~~~~~~~~~~~~~~~~~~~~
IQOS wallet - android    https://play.google.com/store/apps/details?id=com.iqos.referral&pli=1
IQOS wallet - iOS        https://api.iqoswalletmx.com/wallet/passes/download/%%identity_identifier%%
~~~~~~~~~~~~~~~~~~~~~~~~~
TyC Trade In             https://www.iqos.com/mx/es/codigos-de-descuento.html
TyC MGM                  https://www.iqos.com/mx/es/terminos-y-condiciones-del-programa-refiere-a-un-amigo.html
TyC Programa de Prestamo https://www.iqos.com/mx/es/terminos-y-condiciones-del-programa-prestamo-iqos.html
TyC Entrega en 1 hora    https://www.iqos.com/mx/es/terminos-condiciones-para-entrega-por-pari.html
~~~~~~~~~~~~~~~~~~~~~~~~~
Códigos de Descuento     https://www.iqos.com/mx/es/codigos-de-descuento.html
www.iqos.com             https://www.iqos.com/mx/es/home.html
información importante   https://www.iqos.com/mx/es/Noticias/informacion-importante.html
privacy - aqui           https://www.pmiprivacy.com/es-la/consumer
===================================================================
===================================================================
===================================================================
    LINKS COMUNES ZYN
Home                    https://www.zyn.com/mx/es/home.html
Comprar ahora           https://www.zyn.com/mx/es/compra-zyn.html
Conocer más             https://www.zyn.com/mx/es/descubre-zyn.html
==== [zyn.com] ============================================
<a href=\"https://www.zyn.com/mx/es/home.html\" style=\"text-decoration:underline;\" target=\"_blank\">zyn.com</a>

===================================================================
    LINKS TOGETHER CLUB
---------------------------
https://together-club.com/
===================================================================

--------------------
--------------------
--------------------
--------------------
--------------------
--------------------
--------------------
--------------------
--------------------
--------------------
--------------------
--------------------
--------------------
--------------------
--------------------
--------------------
--------------------
--------------------
--------------------
--------------------
--------------------
--------------------
--------------------
--------------------
--------------------
--------------------
--------------------

--------------------
--------------------
--------------------
#### [ WALLETS ] ###########################################
IQOS wallet - android
https://play.google.com/store/apps/details?id=com.iqos.referral&pli=1

IQOS wallet - iOS
https://api.iqoswalletmx.com/wallet/passes/download/%%identity_identifier%%
############################################################


==== [LOCALIZADOR TIENDAS] =================================
https://conoce-iqos.com/localizador-tiendas/
============================================================

==== [iqos.com] ============================================
<a href=\"https://www.iqos.com/mx/es/home.html\" style=\"text-decoration:underline;\" target=\"_blank\">iqos.com</a>
============================================================

==== [ www.iqos.com ] ======================================
<a href=\"https://www.iqos.com/mx/es/home.html\" style=\"text-decoration:underline;\" target=\"_blank\">www.iqos.com</a>
============================================================



==== [TRADE IN] ============================================
Consulta <a href=\"https://www.iqos.com/mx/es/codigos-de-descuento.html\" style=\"text-decoration:underline;\" target=\"_blank\">Términos y Condiciones</a> del Programa Trade in en <a href=\"https://www.iqos.com/mx/es/home.html\" style=\"text-decoration:underline;\" target=\"_blank\">www.iqos.com</a>.
============================================================



==== [Términos y Condiciones (trade in)] ===================
<a href=\"https://www.iqos.com/mx/es/codigos-de-descuento.html\" style=\"text-decoration:underline;\" target=\"_blank\">Términos y Condiciones</a>
============================================================

==== [Términos y Condiciones (MGM)] ========================
<a href=\"https://www.iqos.com/mx/es/terminos-y-condiciones-del-programa-refiere-a-un-amigo.html\" style=\"text-decoration:underline;\" target=\"_blank\">Términos y Condiciones</a>
============================================================

==== [Términos y Condiciones (Programa de Prestamo)] =======
<a href=\"https://www.iqos.com/mx/es/terminos-y-condiciones-del-programa-prestamo-iqos.html\" style=\"text-decoration:underline;\" target=\"_blank\">Términos y Condiciones</a>
============================================================

==== [Términos y Condiciones (Entrega en 1 hora)] ===================
<a href=\"https://www.iqos.com/mx/es/terminos-condiciones-para-entrega-por-pari.html\" style=\"text-decoration:underline;\" target=\"_blank\">Términos y Condiciones.</a>
=====================================================================





======= Códigos de Descuento | IQOS México. ================
<a href=\"https://www.iqos.com/mx/es/codigos-de-descuento.html\" style=\"text-decoration:underline;\" target=\"_blank\">Códigos de Descuento | IQOS México.</a>
============================================================

==== [recompensasiqos.plandereconocimientos.com] ============
<a href=\"https://recompensasiqos.plandereconocimientos.com/\" style=\"text-decoration:underline;\" target=\"_blank\">recompensasiqos.plandereconocimientos.com</a>
=============================================================

==== [www.compraiqos.com.mx] ================================
<a href=\"https://www.compraiqos.com.mx\" style=\"text-decoration:underline;\" target=\"_blank\">www.compraiqos.com.mx</a>
=============================================================

==== [ información importante ] ==========
<a href=\"https://www.iqos.com/mx/es/Noticias/informacion-importante.html\" style=\"text-decoration:underline;\" target=\"_blank\">información importante</a>
==========================================

==== [ aqui (privacy) ] ==================
<a href=\"https://www.pmiprivacy.com/es-la/consumer\" alias=\"footer_pmi_privacy\" style=\"text-decoration:underline;\" target=\"_blank\">aquí</a>
==========================================










===================================================================
SHARE MSG FSH:

fb
Hablemos para que 15 millones de fumadores puedan elegir. Hablemos de alternativas para los que fuman. Únete al movimiento. https://futurosinhumo.com.mx 
http://www.facebook.com/share.php?u=https://futurosinhumo.com.mx&quote=Hablemos%20para%20que%2015%20millones%20de%20fumadores%20puedan%20elegir.%20Hablemos%20de%20alternativas%20para%20los%20que%20fuman.%20%C3%9Anete%20al%20movimiento.

tw
Hablemos para que 15 millones de fumadores puedan elegir. Hablemos de alternativas para los que fuman. Únete al movimiento. https://futurosinhumo.com.mx 
https://twitter.com/intent/tweet?text=Hablemos%20para%20que%2015%20millones%20de%20fumadores%20puedan%20elegir.%20Hablemos%20de%20alternativas%20para%20los%20que%20fuman.%20%C3%9Anete%20al%20movimiento.%20https%3A%2F%2Ffuturosinhumo.com.mx
ya no es necesario: https://ctt.ac/z13Mr

wa
Hablemos para que 15 millones de fumadores puedan elegir. Hablemos de alternativas para los que fuman. Únete al movimiento. https://futurosinhumo.com.mx 
https://wa.me/?text=Hablemos%20para%20que%2015%20millones%20de%20fumadores%20puedan%20elegir.%20Hablemos%20de%20alternativas%20para%20los%20que%20fuman.%20%C3%9Anete%20al%20movimiento.%20https%3A%2F%2Ffuturosinhumo.com.mx



===================================================================

LEADS - SOLICITAR CODIGO UNICO A USUARIO CON IQOS

"donde_codificar_la_siguiente url" : "https://www.urlencoder.org/",
"url_ctaDECODED"      : "whatsapp://send?text=",
"txt2Encode_25pc"     : "Hola, ¿me compartes tu código único de IQOS? Quiero obtener el 25% de descuento. Tú puedes ganar $300 MXN en beneficios digitales.",
"txtEncoded_25pc"     : "Hola%2C%20%C2%BFme%20compartes%20tu%20c%C3%B3digo%20%C3%BAnico%20de%20IQOS%3F%20Quiero%20obtener%20el%2025%25%20de%20descuento.%20T%C3%BA%20puedes%20ganar%20%24300%20MXN%20en%20beneficios%20digitales.",
"url_SIN_MSG"         : "https://wa.me/?text=",
"url"                 : "https://wa.me/?text=Hola%2C%20%C2%BFme%20compartes%20tu%20c%C3%B3digo%20%C3%BAnico%20de%20IQOS%3F%20Quiero%20obtener%20el%2025%25%20de%20descuento.%20T%C3%BA%20puedes%20ganar%20%24300%20MXN%20en%20beneficios%20digitales.",





===================================================================


ESTO ES PARA ILUMA DESDE JUL 2025:

"donde_codificar_la_siguiente url" : "https://www.urlencoder.org/",
"url_ctaDECODED"       : "whatsapp://send?text=",

"txt2Encode_ILUMA20pc" : "Te regalo 20% de descuento en la compra de tu primer Kit IQOS ILUMA, exclusivo en iqos.com. No olvides utilizar mi código %%referral_code%% al comprar.",
"txtEncoded_ILUMA20pc" : "Te%20regalo%2020%25%20de%20descuento%20en%20la%20compra%20de%20tu%20primer%20Kit%20IQOS%20ILUMA%2C%20exclusivo%20en%20iqos.com.%20No%20olvides%20utilizar%20mi%20c%C3%B3digo%20%25%25referral_code%25%25%20al%20comprar.",

"txt2Encode_ILUMA25pc" : "Te regalo 25% de descuento en la compra de tu primer Kit IQOS ILUMA, exclusivo en iqos.com. No olvides utilizar mi código %%referral_code%% al comprar.",
"txtEncoded_ILUMA25pc" : "Te%20regalo%2025%25%20de%20descuento%20en%20la%20compra%20de%20tu%20primer%20Kit%20IQOS%20ILUMA%2C%20exclusivo%20en%20iqos.com.%20No%20olvides%20utilizar%20mi%20c%C3%B3digo%20%25%25referral_code%25%25%20al%20comprar.",

"txt2Encode_ILUMA30pc" : "Te regalo 30% de descuento en la compra de tu primer Kit IQOS ILUMA, exclusivo en iqos.com. No olvides utilizar mi código %%referral_code%% al comprar.",
"txtEncoded_ILUMA30pc" : "Te%20regalo%2030%25%20de%20descuento%20en%20la%20compra%20de%20tu%20primer%20Kit%20IQOS%20ILUMA%2C%20exclusivo%20en%20iqos.com.%20No%20olvides%20utilizar%20mi%20c%C3%B3digo%20%25%25referral_code%25%25%20al%20comprar.",

"txt2Encode_ILUMA35pc" : "Te regalo 35% de descuento en la compra de tu primer Kit IQOS ILUMA, exclusivo en iqos.com. No olvides utilizar mi código %%referral_code%% al comprar.",
"txtEncoded_ILUMA35pc" : "Te%20regalo%2035%25%20de%20descuento%20en%20la%20compra%20de%20tu%20primer%20Kit%20IQOS%20ILUMA%2C%20exclusivo%20en%20iqos.com.%20No%20olvides%20utilizar%20mi%20c%C3%B3digo%20%25%25referral_code%25%25%20al%20comprar.",

"url_NOK"       : " [whatsapp://send?text=] [https://web.whatsapp.com/send?text=]",
"url_OK"        : "https://wa.me/?text=",
"url"           : "https://wa.me/?text=Te%20regalo%2030%25%20de%20descuento%20en%20la%20compra%20de%20tu%20primer%20Kit%20IQOS%20ILUMA.%20No%20olvides%20utilizar%20mi%20c%C3%B3digo%20%25%25referral_code%25%25%20al%20comprar.",

===================================================================

LEGAL FSH  - Brand World
&copy; 2021 %%Member_Busname%% Todos los derechos reservados.<br>%%Member_Addr%%,<br>%%Member_City%%, %%Member_PostalCode%%, %%Member_State%%, %%Member_Country%%<br><a href=\"%%unsub_center_url%%\"><span style=\"text-decoration:underline;color:blue;\">Darme de baja</span></a> | <a href=\"%%profile_center_url%%\"><span style=\"text-decoration:underline;color:blue;\">Actualizar perfil</span></a>

===================================================================
--------------------
--------------------
--------------------
--------------------
--------------------

<br>
<br><br>
<b></b>



<b>IQOS</b>
<b>Kit IQOS</b>
<b>Tiendas IQOS</b>
<b>IQOS 2.4 PLUS</b>
<b>iqos.com</b>





*/