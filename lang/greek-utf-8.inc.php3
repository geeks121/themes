<?php
/* $Id$ */
/* Translated by Kyriakos Xagoraris <theremon at users.sourceforge.net> */

$charset = 'utf-8';
$allow_recoding = TRUE;
$text_dir = 'ltr';
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'tahoma, verdana, helvetica, geneva, sans-serif';
$number_thousands_separator = '.';
$number_decimal_separator = ',';
$byteUnits = array('Bytes', 'KB', 'MB', 'GB');

$day_of_week = array('Κυρ', 'Δευ', 'Τρι', 'Τετ', 'Πεμ', 'Παρ', 'Σαβ');
$month = array('Ιαν', 'Φεβ', 'Μάρ', 'Απρ', 'Μάι', 'Ιούν', 'Ιούλ', 'Αυγ', 'Σεπ', 'Οκτ', 'Νοε', 'Δεκ');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d %B %Y, στις %I:%M %p';

$strAPrimaryKey = 'Ένα πρωτεύον κλειδί προστέθηκε στο %s';
$strAccessDenied = '\'Αρνηση Πρόσβασης';
$strAction = 'Ενέργεια';
$strAddDeleteColumn = 'Προσθήκη/Αφαίρεση Στήλης Πεδίου';
$strAddDeleteRow = 'Προσθήκη/Αφαίρεση Γραμμής Κριτηρίων';
$strAddNewField = 'Προσθήκη νέου Πεδίου';
$strAddPriv = 'Προσθήκη νέου Προνομίου';
$strAddPrivMessage = 'Προσθέσατε νέο Προνόμιο.';
$strAddSearchConditions = 'Προσθήκη νέου όρου (σώμα της "where" πρότασης):';
$strAddToIndex = 'Προσθήκη στο ευρετήριο &nbsp;%s&nbsp;κολώνας(ων)';
$strAddUser = 'Προσθήκη νέου Χρήστη';
$strAddUserMessage = 'Προσθέσατε ένα νέο χρήστη.';
$strAffectedRows = 'Επηρεαζόμενες εγγραφές:';
$strAfter = 'Μετά το %s';
$strAfterInsertBack = 'Επιστροφή';
$strAfterInsertNewInsert = 'Εισαγωγή νέας εγγραφής';
$strAll = 'Όλα';
$strAlterOrderBy = 'Αλλαγή ταξινόμησης Πίνακα κατά';
$strAnIndex = 'Ένα ευρετήριο προστέθηκε στο %s';
$strAnalyzeTable = 'Ανάλυση Πίνακα';
$strAnd = 'Και';
$strAny = 'Οποιοδήποτε';
$strAnyColumn = 'Οποιαδήποτε Στήλη';
$strAnyDatabase = 'Οποιαδήποτε Βάση';
$strAnyHost = 'Οποιοδήποτε Σύστημα';
$strAnyTable = 'Οποιοσδήποτε Πίνακας';
$strAnyUser = 'Οποιοσδήποτε Χρήστης';
$strAscending = 'Αύξουσα';
$strAtBeginningOfTable = 'Στην αρχή του Πίνακα';
$strAtEndOfTable = 'Στο τέλος του Πίνακα';
$strAttr = 'Χαρακτηριστικά';
$strBack = 'Επιστροφή';
$strBinary = 'Δυαδικό';
$strBinaryDoNotEdit = 'Δυαδικό - χωρίς δυνατότητα επεξεργασίας';
$strBookmarkDeleted = 'Η ετικέτα διεγράφη.';
$strBookmarkLabel = 'Ετικέτα';
$strBookmarkQuery = 'Αποθηκευμένη εντολή SQL';
$strBookmarkThis = 'Αποθήκευσε αυτήν την εντολή SQL';
$strBookmarkView = 'Μόνο ανάγνωση';
$strBrowse = 'Περιήγηση';
$strBzip = 'συμπίεση «bzip»';
$strCantLoadMySQL = 'δεν μπορεί να φορτωθεί η επέκταση MySQL,<br />παρακαλώ ελέγξτε τις ρυθμίσεις της PHP.';
$strCantLoadRecodeIconv = 'Δεν είναι δυνατή η φόρτωση της επέκτασης iconv ή recode που χρειάζεται για την μετατροπή του σετ χαρακτήρων. Ρυθμίστε την php να επιτρέπει την χρήση αυτών των επεκτάσεων ή απανεργοποιήστε την μετατροπή χαρακτήρων στο phpMyAdmin.';  //to translate
$strCantRenameIdxToPrimary = 'Η μετονομασία του ευρετηρίου σε PRIMARY σε είναι εφικτή!';
$strCantUseRecodeIconv = 'Δεν είναι δυνατή η χρήση της επέκτασης iconv ούτε της libiconv ούτε της ρουτίνας recode_string, ενώ η επέκταση έχει φορτωθεί. Ελέξτε τις ρυθμίσεις της php.';  //to translate
$strCardinality = 'Μοναδικότητα';
$strCarriage = 'Χαρακτήρας επιστροφής: \\r';
$strChange = 'Αλλαγή';
$strChangeDisplay = 'Επιλέξτε πεδίο για εμφάνιση';  //to translate
$strChangePassword = 'Αλλαγή κωδικού πρόσβασης';
$strCheckAll = 'Επιλογή όλων';
$strCheckDbPriv = 'Έλεγχος προνομίων Βάσης';
$strCheckTable = 'Έλεγχος πίνακα';
$strChoosePage = 'Παρακαλώ επιλέξτε σελίδα για αλλαγή';  //to translate
$strColumn = 'Στήλη';
$strColumnNames = 'Ονόματα στηλών';
$strComments = 'Σχόλια';  //to translate
$strCompleteInserts = 'Ολοκληρωμένες εντολές «Insert»';
$strConfigFileError = 'Το phpMyAdmin δεν μπόρεσε να διαβάσει το αρχείο ρυθμίσεων!<br />Αυτό μπορεί να συμβεί εάν η php βρει κάποιο λάθος στο αρχείο ή εάν η php δεν μπορεί να βρει το αρχείο.<br />Παρακαλώ καλέστε το αρχείο ρυθμίσεων απ\' ευθείας χρησιμοποιώντας το ακόλουθο link και διαβάστε τα μυνήματα λάθους που θα επιστρέψει η php. Στις περισσότερες περιπτώσεις κάπου λείπουν εισαγωγικά (") ή ερωτιματικά (;).<br />Εάν η php επιστρέψει μια λευκή σελίδα, όλα είναι σωστά.'; //to translate
$strConfigureTableCoord = 'Παρακαλώ ορίστε τις συντεταγμένες για τον πίνακα %s';  //to translate
$strConfirm = 'Πραγματικά θέλετε να το εκτελέσετε;';
$strCookiesRequired = 'Από αυτό το σημείο πρέπει να έχετε ενεργοποιημένα cookies.';
$strCopyTable = 'Αντιγραφή πίνακα σε (βάση<b>.</b>πίνακας):';
$strCopyTableOK = 'Ο Πίνακας %s αντιγράφηκε στο %s.';
$strCreate = 'Δημιουργία';
$strCreateIndex = 'Δημιουργία ευρετηρίου σε &nbsp;%s&nbsp;πεδία';
$strCreateIndexTopic = 'Δημιουργία νέου ευρετηρίου';
$strCreateNewDatabase = 'Δημιουργία νέας βάσης';
$strCreateNewTable = 'Δημιουργία νέου πίνακα στη βάση %s';
$strCreatePage = 'Δημιουργία νέας σελίδας';  //to translate
$strCriteria = 'Κριτήρια';
$strData = 'Δεδομένα';
$strDataOnly = 'Μόνο τα δεδομένα';
$strDatabase = 'Βάση ';
$strDatabaseHasBeenDropped = 'Η βάση δεδομένων %s διεγράφη.';
$strDatabaseWildcard = 'Βάση δεδομένων (επιτρέπονται wildcards):';
$strDatabases = 'Βάσεις';
$strDatabasesStats = 'Στατιστικά βάσης';
$strDefault = 'Προκαθορισμένο';
$strDelete = 'Διαγραφή';
$strDeleteFailed = 'Η διαγραφή απέτυχε';
$strDeleteUserMessage = 'Διαγράψατε τον χρήστη %s.';
$strDeleted = 'Η Εγγραφή έχει διαγραφεί';
$strDeletedRows = 'Διαγραμμένες Εγγραφές:';
$strDescending = 'Φθίνουσα';
$strDisplay = 'Εμφάνιση';
$strDisplayOrder = 'Σειρά εμφάνισης:';
$strDisplayPDF = 'Εμφάνιση σχήματος PDF';  //to translate
$strDoAQuery = 'Εκτέλεσε μία «επερώτηση κατά παράδειγμα» (χαρακτήρας μπαλαντέρ "%")';
$strDoYouReally = 'Θέλετε να εκτελέσετε την εντολή';
$strDocu = 'Τεκμηρίωση';
$strDrop = 'Διαγραφή';
$strDropDB = 'Διαγραφή βάσης %s';
$strDropTable = 'Διαγραφή πίνακα';
$strDumpXRows = 'Εμφάνιση %s εγγραφών ξεκινώντας από την εγγραφή %s.'; //to translate
$strDumpingData = '\'Αδειασμα δεδομένων του πίνακα';
$strDynamic = 'δυναμικά';
$strEdit = 'Επεξεργασία';
$strEditPDFPages = 'Αλλαγή σελίδων PDF';  //to translate
$strEditPrivileges = 'Επεξεργασία Προνομίων';
$strEffective = 'Αποτελεσματικός';
$strEmpty = '\'Αδειασμα';
$strEmptyResultSet = 'Η MySQL επέστρεψε ένα άδειο σύνολο αποτελεσμάτων (π.χ. καμμία εγγραφή).';
$strEnd = 'Τέλος';
$strEnglishPrivileges = ' Σημείωση: Τα ονόματα προνομίων της MySQL εκφράζονται στα Αγγλικά ';
$strError = 'λάθος';
$strExplain = 'Ανάλυση κώδικα SQL';  //to translate
$strExport = 'Εξαγωγή';  //to translate
$strExportToXML = 'Export to XML format'; //to translate
$strExtendedInserts = 'Εκτεταμένες εντολές «Insert»';
$strExtra = 'Πρόσθετα';
$strField = 'Πεδίο';
$strFieldHasBeenDropped = 'Το πεδίο %s διεγράφη';
$strFields = 'Πεδία';
$strFieldsEmpty = ' Η απαρίθμηση των πεδίων είναι κενή! ';
$strFieldsEnclosedBy = 'Πεδία που περικλείονται σε';
$strFieldsEscapedBy = 'Τα πεδία χρησιμοποιούν το χαρακτήρα διαφυγής ';
$strFieldsTerminatedBy = 'Πεδία που τελειώνουν σε';
$strFixed = 'προκαθορισμένου μήκους';
$strFlushTable = 'Εκκαθάριση ("FLUSH") πίνακα';
$strFormEmpty = 'Ελλειπής τιμή στο πεδίο !';
$strFormat = 'Μορφοποίηση';
$strFullText = 'Πλήρη κείμενα';
$strFunction = 'Έλεγχος';
$strGenBy = 'Δημιουργήθηκε από:'; //to translate
$strGenTime = 'Χρόνος δημιουργίας';
$strGo = 'Εκτέλεση';
$strGrants = 'Παραχωρήσεις';
$strGzip = 'συμπίεση «gzip»';
$strHasBeenAltered = 'έχει αλλαχθεί.';
$strHasBeenCreated = 'έχει δημιουργηθεί.';
$strHaveToShow = 'Πρέπει να επιλέξετε τουλάχιστον μία στήλη για εμφάνιση';  //to translate
$strHome = 'Κεντρική σελίδα';
$strHomepageOfficial = 'Επίσημη σελίδα του phpMyAdmin';
$strHomepageSourceforge = 'Σελίδα του Sourceforge για την απόκτηση του phpMyAdmin';
$strHost = 'Σύστημα';
$strHostEmpty = 'Το όνομα του Συστήματος είναι κενό!';
$strIdxFulltext = 'Πλήρες κείμενο';
$strIfYouWish = 'Αν ενδιαφέρεστε να φορτώσετε μόνο μερικές απο τις στήλες του πίνακα, καθορίστε μία λίστα πεδίων διαχωρισμένα με κόμμα.';
$strIgnore = 'Παράληψη';
$strInUse = 'σε χρήση';
$strIndex = 'Ευρετήριο';
$strIndexHasBeenDropped = 'Το ευρετήριο %s διεγράφη';
$strIndexName = 'Όνομα ευρετηρίου&nbsp;:';
$strIndexType = 'Τύπος ευρετηρίου&nbsp;:';
$strIndexes = 'Ευρετήρια';
$strInsert = 'Εισαγωγή';
$strInsertAsNewRow = 'Εισαγωγή ως νέα εγγραφές';
$strInsertNewRow = 'Εισαγωγή νέας εγγραφής';
$strInsertTextfiles = 'Εισαγωγή αρχείου κειμένου στον πίνακα';
$strInsertedRows = 'Εισαγόμενες εγγραφές:';
$strInstructions = 'Οδηγίες';
$strInvalidName = 'Η «%s» είναι δεσμευμένη λέξη, δεν μπορείτε να την χρησιμοποιήσετε ως όνομα για Βάση, Πίνακα ή Πεδίο.';
$strKeepPass = 'Διατήρηση κωδικού πρόσβασης';
$strKeyname = 'Όνομα κλειδιού';
$strKill = 'Τερματισμός';
$strLength = 'Μήκος';
$strLengthSet = 'Μήκος/Τιμές*';
$strLimitNumRows = 'Εγγραφές ανά σελίδα';
$strLineFeed = 'Χαρακτήρας προώθησης γραμμής: \\n';
$strLines = 'Γραμμές';
$strLinesTerminatedBy = 'Γραμμές που τελειώνουν σε';
$strLinkNotFound = 'Δεν βρέθηκε η σύνδεση';  //to translate
$strLinksTo = 'Σύνδεση με';  //to translate
$strLocationTextfile = 'Τοποθεσία του αρχείου κειμένου';
$strLogPassword = 'Κωδικός πρόσβασης:';
$strLogUsername = 'Όνομα χρήστη:';
$strLogin = 'Σύνδεση';
$strLogout = 'Αποσύνδεση';
$strMissingBracket = 'Λείπει μία αγκύλη';  //to translate
$strModifications = 'Οι αλλαγές αποθηκεύτηκαν';
$strModify = 'Τροποποίηση';
$strModifyIndexTopic = 'Αλλαγή ενός ευρετηρίου';
$strMoveTable = 'Μεταφορά πίνακα σε (βάση<b>.</b>πίνακας):';
$strMoveTableOK = 'Ο πίνακας %s μεταφέρθηκε στο %s.';
$strMySQLCharset = 'Σετ χαρακτήρων της MySQL';  //to translate
$strMySQLReloaded = 'Η MySQL επαναφορτώθηκε.';
$strMySQLSaid = 'Η MySQL επέστρεψε το μύνημα: ';
$strMySQLServerProcess = 'Η MySQL %pma_s1% εκτελείται στον %pma_s2% ως %pma_s3%';
$strMySQLShowProcess = 'Εμφάνιση διεργασιών';
$strMySQLShowStatus = 'Εμφάνιση πληροφορών εκτέλεσης της MySQL';
$strMySQLShowVars = 'Εμφάνιση μεταβλητών της MySQL';
$strName = 'Όνομα';
$strNext = 'Επόμενο';
$strNo = 'Όχι';
$strNoDatabases = 'Δεν υπάρχουν βάσεις δεδομένων';
$strNoDescription = 'χωρίς περιγραφή';  //to translate
$strNoDropDatabases = 'Οι εντολές «DROP DATABASE» έχουν απενεργοποιηθεί.';
$strNoFrames = 'Το phpMyAdmin είναι πιο φιλικό με έναν browser <b>που υποστηρίζει frames</b>.';
$strNoIndex = 'Δεν ορίστηκε ευρετήριο!';
$strNoIndexPartsDefined = 'Δεν ορίστηκαν τα στοιχεία του ευρετηρίου!';
$strNoModification = 'Χωρίς αλλαγή';
$strNoPassword = 'Χωρίς Κωδικό Πρόσβασης';
$strNoPhp = 'χωρίς κώδικα PHP';  //to translate
$strNoPrivileges = 'Χωρίς Προνόμια';
$strNoQuery = 'Δεν υπάρχει εντολή SQL!';
$strNoRights = 'Δεν έχετε αρκετά δικαιώματα να είσαστε εδώ τώρα!';
$strNoTablesFound = 'Δεν βρέθηκαν Πίνακες στη βάση.';
$strNoUsersFound = 'Δεν βρέθηκαν χρήστες.';
$strNone = 'Κανένα';
$strNotNumber = 'Αυτό δεν είναι αριθμός!';
$strNotSet = 'Ο πίνακας <b>%s</b> δεν βρέθηκε ή δεν ορίστηκε στη %s';  //to translate
$strNotValidNumber = ' δεν είναι υπαρκτός αριθμός Εγγραφής!';
$strNull = 'Κενό';
$strNumSearchResultsInTable = '%s αποτελέσματα στον πίνακα <i>%s</i>';//to translate
$strNumSearchResultsTotal = '<b>Σύνολο:</b> <i>%s</i> αποτελέσματα';//to translate
$strOftenQuotation = 'Συχνά εισαγωγικά. Το OPTIONALLY σημαίνει ότι μόνο τα πεδία char και varchar εμπεριέχονται με τον χαρακτήρα «περιστοιχίζεται από».';
$strOperations = 'Λειτουργίες';  //to translate
$strOptimizeTable = 'Βελτιστοποίηση Πίνακα';
$strOptionalControls = 'Προεραιτικό. Ρυθμίζει πώς να γίνεται η ανάγνωση και η εγγραφή ειδικών χαρακτήρων.';
$strOptionally = 'ΠΡΟΑΙΡΕΤΙΚΑ';
$strOptions = 'Επιλογές';  //to translate
$strOr = 'Ή';
$strOverhead = 'Επιβάρυνση';
$strPHPVersion = 'Έκδοση PHP';
$strPageNumber = 'Σελίδα:';  //to translate
$strPartialText = 'Επιμέρους κείμενα';
$strPassword = 'Κωδικός Πρόσβασης';
$strPasswordEmpty = 'Ο Κωδικός Πρόσβασης είναι κενός!';
$strPasswordNotSame = 'Οι κωδικοί πρόσβασης δεν είναι ίδιοι!';
$strPdfDbSchema = 'Σχήμα της βάσης "%s" - Σελίδα %s';  //to translate
$strPdfInvalidPageNum = 'Δεν ορίστηκε αριθμός σελίδας PDF!';  //to translate
$strPdfInvalidTblName = 'Ο πίνακας "%s" δεν υπάρχει!';  //to translate
$strPhp = 'Δημιουργία κώδικα PHP';  //to translate
$strPmaDocumentation = 'Τεκμηρίωση phpMyAdmin';
$strPmaUriError = 'Η εντολή <tt>$cfg[\'PmaAbsoluteUri\']</tt> ΠΡΕΠΕΙ να οριστεί στο αρχείο προεπιλογών!';
$strPos1 = 'Αρχή';
$strPrevious = 'Προηγούμενο';
$strPrimary = 'Πρωτεύον';
$strPrimaryKey = 'Πρωτεύον κλειδί';
$strPrimaryKeyHasBeenDropped = 'Το πρωτεύον κλειδί διεγράφη';
$strPrimaryKeyName = 'Το όνομα του πρωτεύοντος κλειδιού πρέπει να είναι... PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>πρέπει</b> να είναι το όνομα του πρωτεύοντος κλειδιού και <b>μόνο αυτού</b> !)';
$strPrintView = 'Εμφάνιση για εκτύπωση';
$strPrivileges = 'Προνόμια';
$strProperties = 'Ιδιότητες';
$strQBE = 'Επερώτηση κατά παράδειγμα';
$strQBEDel = 'Διαγραφή';
$strQBEIns = 'Εισαγωγή';
$strQueryOnDb = 'Εντολή SQL στη βάση <b>%s</b>:';
$strReType = 'Επαναεισαγωγή';
$strRecords = 'Εγγραφές';
$strReferentialIntegrity = 'Έλεγχος ακεραιότητας σχέσεων:';
$strRelationView = 'Εμφάνιση σχέσεων';  //to translate
$strReloadFailed = 'Η επανεκκίνηση της MySQL απέτυχε.';
$strReloadMySQL = 'Επανεκκίνηση της MySQL';
$strRememberReload = 'Ενθύμιση της επανεκκίνησης του διακομιστή.';
$strRenameTable = 'Μετονομασία πίνακα σε';
$strRenameTableOK = 'Ο Πίνακας %s μετονομάσθηκε σε %s';
$strRepairTable = 'Επιδιόρθωση πίνακα';
$strReplace = 'Αντικατάσταση';
$strReplaceTable = 'Αντικατάσταση δεδομένων Πίνακα με το αρχείο';
$strReset = 'Επαναφορά';
$strRevoke = 'Ανάκληση';
$strRevokeGrant = 'Ανάκληση Παραχώρισης';
$strRevokeGrantMessage = 'Ανακαλέσατε τα προνόμια Παραχώρισης του %s';
$strRevokeMessage = 'Ανακαλέσατε τα προνόμια για %s';
$strRevokePriv = 'Ανάκληση προνομοίων';
$strRowLength = 'Μέγεθος Γραμμής';
$strRowSize = ' Μέγεθος Εγγραφής ';
$strRows = 'Εγγραφές';
$strRowsFrom = 'Εγγραφές αρχίζοντας από την εγγραφή';
$strRowsModeHorizontal = 'οριζόντια';
$strRowsModeOptions = 'σε %s μορφή με επανάληψη επικεφαλίδων ανά %s κελιά';
$strRowsModeVertical = 'κάθετη';
$strRowsStatistic = 'Στατιστικά Εγγραφών';
$strRunQuery = 'Υποβολή επερώτησης';
$strRunSQLQuery = 'Εκτέλεση εντολής/εντολών SQL στη βάση δεδομένων %s';
$strRunning = 'που εκτελείται στο %s';
$strSQL = 'SQL'; //to translate
$strSQLQuery = 'Εντολή SQL';
$strSQLResult = 'αποτέλεσμα SQL'; //to translate
$strSave = 'Αποθήκευση';
$strScaleFactorSmall = 'Η κλίμακα είναι πολύ μικρή για να εμφανιστεί το σχήμα σε μία σελίδα';  //to translate
$strSearch = 'Αναζήτηση';//to translate
$strSearchFormTitle = 'Αναζήτηση στη βάση';//to translate
$strSearchInTables = 'Μέσα στους πίνακες:';//to translate
$strSearchNeedle = 'Όροι ή τιμές για αναζήτηση (μπαλαντέρ: "%"):';//to translate
$strSearchOption1 = 'τουλάχιστον έναν από τους όρους';//to translate
$strSearchOption2 = 'όλους τους όρους';//to translate
$strSearchOption3 = 'την ακριβή φράση';//to translate
$strSearchOption4 = 'ως regular expression';//to translate
$strSearchResultsFor = 'Αποτελέσματα αναζήτησης για "<i>%s</i>" %s:';//to translate
$strSearchType = 'Έυρεση:';//to translate
$strSelect = 'Επιλογή';
$strSelectADb = 'Παρακαλώ επιλέξτε μία βάση δεδομένων';
$strSelectAll = 'Επιλογή όλων';
$strSelectFields = 'Επιλογή πεδίων (τουλάχιστον ένα)';
$strSelectNumRows = 'στην εντολή';
$strSelectTables = 'Επιλογή Πινάκων';  //to translate
$strSend = 'Αποστολή';
$strServerChoice = 'Επιλογή Διακομιστή';
$strServerVersion = 'Έκδοση Διακομιστή';
$strSetEnumVal = 'Αν ο τύπος του πεδίου είναι «enum» ή «set», παρακαλώ εισάγετε τις τιμές χρησιμοποιώντας την εξής μορφοποίηση: \'α\',\'β\',\'γ\'...<br /> Αν χρειάζεται να εισάγετε την ανάποδη κάθετο ("\") ή απλά εισαγωγικά ("\'"), προθέστε τα με ανάποδη κάθετο στην αρχή (για παράδειγμα \'\\\\χψω\' ή \'α\\\'β\').';
$strShow = 'Εμφάνιση';
$strShowAll = 'Εμφάνιση όλων';
$strShowColor = 'Εμφάνιση χρωμάτων';  //to translate
$strShowCols = 'Εμφάνιση στηλών';
$strShowGrid = 'Εμφάνιση πλέγματος';  //to translate
$strShowPHPInfo = 'Εμφάνιση πληροφοριών της PHP';
$strShowTableDimension = 'Εμφάνιση διαστάσεων πινάκων';  //to translate
$strShowTables = 'Εμφάνιση πινάκων';
$strShowThisQuery = ' Εμφάνισε εδώ ξανά αυτήν την εντολή ';
$strShowingRecords = 'Εμφάνιση εγγραφής ';
$strSingly = '(μοναδικά)';
$strSize = 'Μέγεθος';
$strSort = 'Ταξινόμιση';
$strSpaceUsage = 'Χρήση χώρου';
$strSplitWordsWithSpace = 'Οι λέξεις χωρίζονται από τον χαρακτήρα διαστήματος (" ").';//to translate
$strStatement = 'Δηλώσεις';
$strStrucCSV = 'Δεδομένα CSV';
$strStrucData = 'Δομή και δεδομένα';
$strStrucDrop = 'Προσθήκη «Drop Table»';
$strStrucExcelCSV = 'Μορφή CSV για δεδομένα Ms Excel';
$strStrucOnly = 'Μόνο η δομή';
$strStructPropose = 'Προτεινόμενη δομή πίνακα';  //to translate
$strStructure = 'Δομή';  //to translate
$strSubmit = 'Αποστολή';
$strSuccess = 'Η SQL εντολή σας εκτελέσθηκε επιτυχώς';
$strSum = 'Σύνολο';
$strTable = 'Πίνακας ';
$strTableComments = 'Σχόλια Πίνακα';
$strTableEmpty = 'Το όνομα του Πίνακα είναι κενό!';
$strTableHasBeenDropped = 'Ο Πίνακας %s διεγράφη';
$strTableHasBeenEmptied = 'Ο Πίνακας %s άδειασε';
$strTableHasBeenFlushed = 'Ο Πίνακας %s εκκαθαρίστικε ("FLUSH")';
$strTableMaintenance = 'Συντήρηση Πίνακα';
$strTableStructure = 'Δομή Πίνακα για τον Πίνακα';
$strTableType = 'Τύπος Πίνακα';
$strTables = '%s Πίνακας/Πίνακες';
$strTextAreaLength = ' Εξαιτίας του μεγέθος του,<br /> αυτό το πεδίο μπορεί να μη μπορεί να διορθωθεί ';
$strTheContent = 'Τα περιεχόμενα του αρχείου σας έχουν εισαγχθεί.';
$strTheContents = 'Τα περιεχόμενα του αρχείου αντικαθιστούν τα περιεχόμενα του επιλεγμένου πίνακα για Γραμμές με ίδιο πρωτεύον ή μοναδικό κλειδί.';
$strTheTerminator = 'Ο τερματικός χαρακτήρας των πεδίων.';
$strTotal = 'συνολικά';
$strType = 'Τύπος';
$strUncheckAll = 'Απεπιλογή όλων';
$strUnique = 'Μοναδικό';
$strUnselectAll = 'Απεπιλογή όλων';
$strUpdatePrivMessage = 'Τα προνόμια του χρήστη %s ενημερώθηκαν.';
$strUpdateProfile = 'Ενημέρωση στοιχείων:';
$strUpdateProfileMessage = 'Τα στοιχεία ανανεώθηκαν.';
$strUpdateQuery = 'Ενημέρωση της εντολής';
$strUsage = 'Χρήση';
$strUseBackquotes = 'Χρήση ανάποδων εισαγωγικών στα ονόματα των Πινάκων και των Πεδίων';
$strUseTables = 'Χρήση Πινάκων';
$strUser = 'Χρήστης';
$strUserEmpty = 'Το όνομα του χρήστη είναι κενό!';
$strUserName = 'Όνομα χρήστη';
$strUsers = 'Χρήστες';
$strValue = 'Τιμή';
$strViewDump = 'Εμφάνιση σχήματος του πίνακα';
$strViewDumpDB = 'Εμφάνιση σχήματος της βάσης';
$strWelcome = 'Καλωσήρθατε στο %s';
$strWithChecked = 'Με τους επιλεγμένους:';
$strWrongUser = 'Λανθασμένο όνομα χρήστη/κωδικός πρόσβασης. \'Αρνηση πρόσβασης.';
$strYes = 'Ναι';
$strZip = 'συμπίεση «zip»';
// To translate
$strRelationNotWorking = 'The additional Features for working with linked Tables have been deactivated. To find out why click %shere%s.';  //to translate
$strAllTableSameWidth = 'display all Tables with same width?';  //to translate
?>
