# TW

# LeHS (Learn HTML & CSS) / M

Sa se creeze un sistem Web ce ajuta diverse categorii de persoane (de la incepatori la experti) sa invete, exerseze si aprofundeze cunostinte referitoare la HTML si CSS.

Dupa autentificarea cu un cont disponibil pe o retea sociala la alegere (minimal, GitHub), aplicatia va pune la dispozitia utilizatorilor, printr-o interfata atractiva, nivele cu diverse provocari (eventual, insotite de explicatii ce constau din anumite sarcini (e.g., scriere de cod-sursa, raspunsuri la teste) pentru a trece mai departe.

Aplicatia va salva progresul fiecarui utilizator, acesta putand, ulterior, sa continue de unde a ramas. In plus, se vor oferi statistici referitoare la clasamentele globale pentru fiecare utilizator in parte si vizand nivelurile de dificultate. De asemenea, solutia va expune si un API REST/GraphQL prin care alte aplicatii vor putea prelua in format JSON sau XML atat provocarile, cat si raspunsurile corecte.

Se vor avea in vedere aspecte precum internationalizarea si accesibilitatea.

Inspiratie: [Flexbox Froggy](https://flexboxfroggy.com/) & [CSS Grid Garden](https://cssgridgarden.com/) .

# Utilizare aplicație

În primul rând pentru a face aplicația să ruleze local este nevoie de [Xampp](https://www.apachefriends.org/ro/index.html) care să fie instalat de preferat în driver-ul 'C' al computer-ului.  După care se clonează [repo-ul](https://github.com/PricopCosminFII/TW.git) și se ia folder-ul Project care va fi pus în directorul 'C:\xampp\htdocs'. După care se vor face setările pentru server-ul Apache și MySQL: se deschide Xampp Control Panel, după care se accesează Apache->Config->Apache(httpd.conf) și se schimbă Listen-ul să fie Listen 12.34.56.78:3000 și Listen 3000. Următorul pas este Apache->ConfigphpMyAdmin(config.inc.php) și se modifică astfel:![image](https://i.gyazo.com/303fffdefebb343b2e8f7eb69a982de4.png) 


Și în ultimu rând în MySQL Config my.ini se caută 'port' și se schimbă de la 3306 la 3307/3308.


