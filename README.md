# TW

# LeHS (Learn HTML & CSS) / M

Sa se creeze un sistem Web ce ajuta diverse categorii de persoane (de la incepatori la experti) sa invete, exerseze si aprofundeze cunostinte referitoare la HTML si CSS.

Dupa autentificarea cu un cont disponibil pe o retea sociala la alegere (minimal, GitHub), aplicatia va pune la dispozitia utilizatorilor, printr-o interfata atractiva, nivele cu diverse provocari (eventual, insotite de explicatii ce constau din anumite sarcini (e.g., scriere de cod-sursa, raspunsuri la teste) pentru a trece mai departe.

Aplicatia va salva progresul fiecarui utilizator, acesta putand, ulterior, sa continue de unde a ramas. In plus, se vor oferi statistici referitoare la clasamentele globale pentru fiecare utilizator in parte si vizand nivelurile de dificultate. De asemenea, solutia va expune si un API REST/GraphQL prin care alte aplicatii vor putea prelua in format JSON sau XML atat provocarile, cat si raspunsurile corecte.

Se vor avea in vedere aspecte precum internationalizarea si accesibilitatea.

Inspiratie: [Flexbox Froggy](https://flexboxfroggy.com/) & [CSS Grid Garden](https://cssgridgarden.com/) .

# Utilizare aplicație

În primul rând pentru a face aplicația să ruleze local este nevoie de [Xampp](https://www.apachefriends.org/ro/index.html) care să fie instalat de preferat în driver-ul 'C' al computer-ului.  După care se clonează [repo-ul](https://github.com/PricopCosminFII/TW.git) și se ia folder-ul Project care va fi pus în directorul 'C:\xampp\htdocs' împreună cu questionAPI. După care se vor face setările pentru server-ul Apache și MySQL: se deschide Xampp Control Panel, după care se accesează Apache->Config->Apache(httpd.conf) și se schimbă Listen-ul să fie #Listen 12.34.56.78:3000 și Listen 3000. Următorul pas este Apache->ConfigphpMyAdmin(config.inc.php) și se modifică astfel:![image](https://i.gyazo.com/303fffdefebb343b2e8f7eb69a982de4.png) 


Și în ultimu rând în MySQL Config my.ini se caută 'port' și se schimbă de la 3306 la 3307/3308.



Următorul pas este schimbarea parolei din interiorul codului: se deschide codul sursă într-un editor text și după care în fișierele: din Controller downloadhtml.php downloadcss.php uploadhtml.php uploadcss.php , din Cores Database.php se înlocuiește "parola_ta" cu parolă de la contul dumneavoastră de MySQL.


Acum în Xampp Control Panel la Actions se da Start la Apache și MySQL și se intră pe link-ul 'http://localhost:3000/Project/'.

Odată intrat pe link utilizatorul se va află pe pagină principala unde va avea o scurtă prezentare a site-ului și unde va putea să se autentifice sau să își creeze un cont nou. După această utilizatorul poate să exploreze site-ul prin intermediul barei de navigație. Facilitățile oferite de site sunt: pagină de Home, Levels, Profile și Leaderboard. 

În pagină de Home utlizatorul are o scurtă descriere a site-ului și poate să se ducă direct spre pagină de Levels prin intermediul unui buton. Că tot veni vorba de Levels în această se află 2 butoane care redirecționează utilizatorul fie spre lecțiile de HTML sau cele de CSS în urmă învățării având parte de niște întrebări, iar progresul va fi memorat. Acest progres va putea apărea pe Leaderboard dacă este între cei mai buni 10 utilizatori ai platformei sau pe pagină personală de profil,Profile, unde va avea mai multe statistici.

În cazul în care utilizatorul iese din aplicație la revenirea lui la exerciții va continuă de unde a rămas fără a face din nou același traseu.

De asemenea pagină oferă o funcționalitate pentru administrator care poate să pună întrebări noi pentru utilizatori prin niște caracteristici speciale pentru contul sau. Acesta poate să prea informațiile din bazale de date alea întrebărilor și să le modifice adăugând noi întrebări, această fiind singură funcționalitate cu ajutorul contului de administrator.

