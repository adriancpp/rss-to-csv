Opis instalacji:
=============
1. Pobieramy projekt rss-to-csv
2. Przechodzimy za pomocą konsoli do głównego folderu projektu.
3. Wpisujemy przykładowo polecenie: 

php src/console.php csv:simple https://blog.nationalgeographic.org/rss simple_export.csv

które w głównym katalogu utworzy plik simple_export.csv zawierający feed z adresu 
https://blog.nationalgeographic.org/rss.




Pliki i foldery
=============
src/console.php 
	Plik uruchomieniowy

src/Rss.php
	Główna klasa programu, jest odpowiedzialna za pobranie kanału oraz jego export do 	pliku csv

src/Tools.php
	Pomocnicza klasa z dodatkowymi narzędziami, tj. własna implementacja parsowania 	daty na potrzeby zadania.

test/(...)
	Folder zawierający testy jednostkowe dla klasy Rss.