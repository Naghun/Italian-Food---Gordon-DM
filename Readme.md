# Italian Food - Gordon DM Test Project

## Kratki opis projekta

Projekat rađen u PHP WordPressu, Custom tema izrađena sa fokusam na kodiranje čija je ideja da svaka stranica ima svoj template ili koristi template koji joj u mnogome odgovara.
Fokus stavljen na efikasnost koji je popraćen što većom pažnjom na detalje ali ne zalazeći u dubine zbog pgraničenosti rokom predavanja rada.
Dizajn i Responsivnost rađeni sa Bootstrapom te vanilla CSSom dok je većina interaktivnosti odrađena sa Vanilla jsom gdje je rađeno i sa funkcijama i OOP pristup.
Vođeno računa o DRY metodama koliko je bilo moguće te je projekat raspoređen u jasno definisane foldere radi lakše orijentacije.
Za demonstraciju rada sa API Callovima korišen WordPress Ajax i JQuery.


## Pokretanje WordPress projekta

U ovom repositoryu možete pronaći local.sql file koji je najnovija verzija Baze podataka potrebne za ovaj projekat.
Dva filea, pdf i txt u kojima sam opširnije pojasnio projekat.
Svi ostali fileovi su filovi vezani za custom temu Italian Food - Gordon DM.
U nastavku vam pojašnjavam dva jednostavna i po meni najlakša načina za podizanje ovog WordPress projekta:
1. Način:
   - na sljedećem linku ćete pronaći zipovan file koji je potrebno downloadovati:
     https://1drv.ms/u/s!ArHjR2C1pfu-h7MI6Sz5JzAxQnal4A?e=kcDPRS
     
   - otvoriti ili skinuti Local by FlyWheel razvojno okruženje za izradu WordPress stranica:
    https://localwp.com/
   - Drag&Drop zipovani file u Local Dashboard, sačekati određeno vrijeme da se projekat uspostavi (od 1 - 5min maximalno)
   - Nakon postavljanja Sitea odobriti one-click admin i odabrati jednog od admina sitea (Opcionalno)
   - Nakon toga pritisnuti dugme WP Admin koji će vas automatski redirectati na admin dashboard (ukoliko je one-click-admin opcija odobrena) ili na log in ukoliko niste logovani
   - Pristupni podaci su: Username: 'admin', Password: 'admin'.
   - Nakon odrađenih koraka logovani ste i možete koristiti temu. Sretno!!! (U slučaju greške prvo pokušati sa osvježavanjem permalinkova: < Admin dashboard -> settings -> permalinks -> Save Changes)

2. Način:
   - Na sljedećem linku pronaći ćete file koji je potrebno downloadovati.
     https://1drv.ms/u/s!ArHjR2C1pfu-h7MJIMfiTlrxCHOpag?e=0jhT5i

   - Nakon preuzimanja file sa linka potrebno uspostaviti WordPress site sa proizvoljnim podacima a bilo koji način (s obzirom da ćemo overwriteati čitav projekat).
   - Pristupiti admin dashboardu trenutnog WordPress sitea sa podacima user admina koje ste samostalno podesili.
   - Sljedeći korak je skidanje All-In-One-WP-Migration by ServMask (5+ million active instalations) i aktiviranje istog.
   - Nakon aktivacije plugina u admin dashboardu, pronaći ga, (pretežno iznad settings) zatim klkinuti na njega ili sačekati da se otvori dodatni meni te odabrati opciju "Import".
   - Odabrati file koji ste pronašli na linku, odobriti nastavak procesa (Obratiti pažnju da ne overwriteate projekat koji vam je bitan s obzirom da ova metoda briše sve postojeće podatke trenutnog projekta).
   - Osvježiti stranicu koja će vas preusmjeriti na login gdje ćete sa sljedećim podacima pristupiti projektu: Username: 'admin', Password: 'admin'.
   - Nakon odrađenih koraka logovani ste i možete koristiti temu. Sretno!!! (U slučaju greške prvo pokušati sa osvježavanjem permalinkova: < Admin dashboard -> settings -> permalinks -> Save Changes)
  
   U slučaju potrebe za alternativnim metodama stojim na raspolaganju!
   S poštovanjem,
   Junior Web Developer - Abdullah Sinanović
