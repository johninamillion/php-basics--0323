# PHP Basics

## Inhaltsverzeichnis
- [PHP Basics](#php-basics)
  - [Inhaltsverzeichnis](#inhaltsverzeichnis)
  - [Einführung in Apache-Server und PHP für Studenten](#einführung-in-apache-server-und-php-für-studenten)
    - [Apache-Server](#apache-server)
    - [PHP](#php)
    - [Fazit](#fazit)
- [Anleitung zur Einrichtung von MAMP auf Mac](#anleitung-zur-einrichtung-von-mamp-auf-mac)
- [Anleitung zur Einrichtung von XAMPP auf Windows](#anleitung-zur-einrichtung-von-xampp-auf-windows)
- [Document Root](#document-root)
  - [MAMP](#mamp)
  - [XAMPP](#xampp)

## Einführung in Apache-Server und PHP für Studenten
In der Welt der Webentwicklung gibt es zwei wichtige Begriffe, die du kennen solltest: Apache-Server und PHP. Diese beiden Technologien spielen eine wesentliche Rolle bei der Bereitstellung von Websites und der Entwicklung von Webanwendungen.

### Apache-Server
Ein Apache-Server ist eine Software, die als Webserver fungiert und die Grundlage für den Betrieb von Websites bildet. Stell dir den Apache-Server als einen virtuellen Ort vor, an dem deine Website gehostet und für die Öffentlichkeit zugänglich gemacht wird.

Der Apache-Server nimmt Anfragen von Webbrowsern entgegen und liefert die entsprechenden Webseiten oder Daten zurück. Er ist in der Lage, mit verschiedenen Protokollen wie HTTP und HTTPS zu kommunizieren und kann auf unterschiedlichen Betriebssystemen wie Windows, macOS und Linux installiert werden.

Der Apache-Server bietet eine flexible Konfiguration und ermöglicht die Verwendung von Modulen, um zusätzliche Funktionen hinzuzufügen. Zum Beispiel kann er die Ausführung von serverseitigen Skripts wie PHP ermöglichen, auf Datenbanken zugreifen und vieles mehr.

### PHP
PHP steht für "Hypertext Preprocessor" und ist eine weit verbreitete serverseitige Skriptsprache. Vereinfacht gesagt, ermöglicht PHP die Erstellung dynamischer Webseiten, die auf Benutzerinteraktionen reagieren und mit Datenbanken interagieren können.

Im Gegensatz zu statischen Webseiten, bei denen der Inhalt festgelegt ist und sich nicht ändert, ermöglicht PHP die Generierung von Inhalten in Echtzeit. Du kannst PHP verwenden, um Daten aus Formularen zu verarbeiten, Benutzerinformationen zu speichern, Datenbanken abzufragen und vieles mehr.

### Fazit
Apache-Server und PHP sind grundlegende Bausteine der Webentwicklung. Der Apache-Server ermöglicht es dir, deine Website für die Öffentlichkeit zugänglich zu machen, während PHP die Erstellung dynamischer Inhalte und die Interaktion mit Benutzern und Datenbanken ermöglicht. Indem du dich mit diesen Technologien vertraut machst, wirst du in der Lage sein, fortschrittliche Webanwendungen zu entwickeln und spannende Projekte umzusetzen.

## Anleitung zur Einrichtung von MAMP auf Mac
MAMP ist eine Software, die einen lokalen Webserver für die Entwicklung von Websites und Anwendungen bereitstellt. Hier ist eine Schritt-für-Schritt-Anleitung zur Einrichtung von MAMP auf einem Mac:

1. Lade MAMP herunter: Besuche die offizielle MAMP-Website und lade die neueste Version von MAMP für Mac herunter.
2. Installiere MAMP: Nachdem der Download abgeschlossen ist, öffne die Installationsdatei und folge den Anweisungen des Installationsassistenten. Ziehe das MAMP-Icon in den Anwendungsordner, um die Installation abzuschließen.
3. Starte MAMP: Nach der Installation kannst du MAMP aus dem Anwendungsordner öffnen. Du findest das MAMP-Icon im Dock oder im Launchpad.
4. Starte den Webserver: Im MAMP-Hauptfenster klicke auf die Schaltfläche "Start" oder "Start Servers", um den Apache- und MySQL-Server zu starten. Wenn die Server erfolgreich gestartet werden, ändern sich die Anzeigen auf grün.
5. Überprüfe die Installation: Öffne deinen Webbrowser und gib "http://localhost:8888" in die Adressleiste ein. Wenn du die MAMP-Startseite siehst, bedeutet dies, dass MAMP erfolgreich installiert und eingerichtet wurde.
6. Konfiguriere PHP-Version: Standardmäßig wird MAMP mit einer bestimmten PHP-Version ausgeliefert. Wenn du eine andere PHP-Version verwenden möchtest, kannst du dies im MAMP-Hauptfenster unter "Preferences" -> "PHP" einstellen. Wähle die gewünschte PHP-Version aus der Liste aus und klicke auf "OK".
7. Arbeite mit deinen Dateien: MAMP verwendet standardmäßig den Ordner "htdocs" als Wurzelverzeichnis für deine Webprojekte. Du findest diesen Ordner im MAMP-Installationsverzeichnis. Platziere deine HTML-, CSS- und PHP-Dateien in diesem Ordner, um sie über deinen lokalen Webserver zugänglich zu machen.
8. Das war's! Du hast MAMP erfolgreich auf deinem Mac eingerichtet und kannst nun lokal Websites und Anwendungen entwickeln. Viel Spaß beim Programmieren!

## Anleitung zur Einrichtung von XAMPP auf Windows
XAMPP ist eine Software, die einen lokalen Webserver für die Entwicklung von Websites und Anwendungen bereitstellt. Hier ist eine Schritt-für-Schritt-Anleitung zur Einrichtung von XAMPP auf einem Windows-System:

1. Lade XAMPP herunter: Besuche die offizielle XAMPP-Website und lade die neueste Version von XAMPP für Windows herunter.
2. Installiere XAMPP: Nachdem der Download abgeschlossen ist, führe die Installationsdatei aus und folge den Anweisungen des Installationsassistenten. Wähle den Standardinstallationspfad oder einen anderen Pfad deiner Wahl.
3. Starte XAMPP: Nach der Installation öffne den Installationsordner von XAMPP und starte das XAMPP Control Panel. Du findest eine Verknüpfung dazu auf deinem Desktop oder im Startmenü.
4. Starte die erforderlichen Dienste: Im XAMPP Control Panel siehst du eine Liste der verfügbaren Dienste wie Apache, MySQL, FileZilla usw. Klicke auf die Schaltfläche "Start" neben Apache und MySQL, um die entsprechenden Dienste zu starten. Wenn der Dienst erfolgreich gestartet wird, wird die entsprechende Anzeige grün.
5. Überprüfe die Installation: Öffne deinen Webbrowser und gib "http://localhost" in die Adressleiste ein. Wenn du die XAMPP-Standardseite siehst, bedeutet dies, dass XAMPP erfolgreich installiert und eingerichtet wurde.

## Document Root
Das Document Root, auch als Wurzelverzeichnis bezeichnet, ist der Hauptordner, in dem die Dateien für deine Website oder deine Webanwendung gespeichert sind. Der Webserver, sei es Apache in XAMPP oder MAMP, verwendet das Document Root-Verzeichnis, um den Inhalt deiner Website zu laden und anzuzeigen.

In XAMPP und MAMP kannst du das Document Root-Verzeichni s nach Bedarf konfigurieren. Hier ist eine Erklärung, wie du dies in beiden Softwarepaketen tun kannst:

### MAMP
1. Öffne die MAMP-Anwendung auf deinem Mac.
2. Klicke auf den Tab "Preferences" oder "Einstellungen".
3. Wähle den Tab "Web Server".
4. Neben "Document Root" findest du das aktuelle Verzeichnis, das als Document Root dient. Standardmäßig ist es /Applications/MAMP/htdocs.
5. Klicke auf den "Choose" oder "Ändern" Button neben "Document Root", um das gewünschte Verzeichnis als Document Root auszuwählen.
6. Wähle das neue Verzeichnis aus und klicke auf "OK".
7. Starte den MAMP-Server neu, damit die Änderungen wirksam werden.

Nun verwendet der Apache-Server in MAMP das von dir ausgewählte Verzeichnis als Document Root.

Beachte, dass nach der Konfiguration des Document Root möglicherweise auch virtuelle Hosts oder andere Einstellungen angepasst werden müssen, um deine Website korrekt zu laden. In den entsprechenden Konfigurationsdateien kannst du zusätzliche Anpassungen vornehmen, wenn nötig.

### XAMPP
1. Öffne den Installationsordner von XAMPP auf deinem Computer.
2. Navigiere zum Unterordner apache und öffne die Datei httpd.conf mit einem Texteditor.
3. Suche nach der Direktive DocumentRoot, die standardmäßig auf htdocs verweist. Dies ist das Standard-Document Root-Verzeichnis in XAMPP.
4. Ändere den Pfad nach deinen Wünschen, um das gewünschte Verzeichnis als Document Root festzulegen. Zum Beispiel: DocumentRoot "C:/MeinProjekt".
5. Speichere die Änderungen in der httpd.conf-Datei.
6. Starte den Apache-Server neu, damit die Änderungen wirksam werden.

Jetzt wird der Apache-Server in XAMPP das von dir festgelegte Verzeichnis als Document Root verwenden.