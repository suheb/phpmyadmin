<?php
/* $Id$ */

$charset = 'iso-8859-1';
$text_dir = 'ltr';
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'arial, helvetica, geneva, sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// abreviatures de Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');
$timespanfmt = '%s dies, %s hores, %s minuts i %s segons';

$day_of_week = array('Diu', 'Dll', 'Dma', 'Dcr', 'Djs', 'Div', 'Dis');
$month = array('Gen', 'Feb', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Oct', 'Nov', 'Dec');
// Veure http://www.php.net/manual/es/function.strftime.php per a definir
// la variable seguent
$datefmt = '%d-%m-%Y a les %H:%M:%S';

$strAPrimaryKey = 'S\'ha afegit una clau prim�ria a %s';
$strAbortedClients = 'Avortat';
$strAbsolutePathToDocSqlDir = 'S\'ha d\'entrar el cam� absolut en el webserver per el directori de docSQL';
$strAccessDenied = 'Acc�s denegat';
$strAction = 'Acci�';
$strAddDeleteColumn = 'Afegir/esborrar Camps de Columna';
$strAddDeleteRow = 'Afegir/esborrar fila de criteri';
$strAddNewField = 'Afegir un camp nou';
$strAddPriv = 'Afegir un privilegi nou';
$strAddPrivMessage = 'Has afegit un privilegi nou.';
$strAddPrivilegesOnDb = 'Afegir permissos a la seg�ent base de dades';
$strAddPrivilegesOnTbl = 'Afegir permissos a la seg�ent taula';
$strAddSearchConditions = 'Afegeix condicions de recerca (cos de la cl�usula "where"):';
$strAddToIndex = 'Afegir columna(es) a l\'�ndex %s&nbsp;';
$strAddUser = 'Afegir un usuari nou';
$strAddUserMessage = 'Has afegit un usuari nou.';
$strAddedColumnComment = 'Afegit comentari per la columna';
$strAddedColumnRelation = 'Afegida relaci� per la columna';
$strAdministration = 'Administraci�';
$strAffectedRows = 'Files afectades:';
$strAfter = 'Despr�s %s';
$strAfterInsertBack = 'Tornar';
$strAfterInsertNewInsert = 'Inserta un nou registre';
$strAll = 'Tot';
$strAllTableSameWidth = 'Mostrar totes les taules amb la mateixa amplada?';
$strAlterOrderBy = 'Altera la taula i ordena per';
$strAnIndex = 'S\'ha afegit un �ndex a %s';
$strAnalyzeTable = 'Analitza la taula';
$strAnd = 'I';
$strAny = 'Qualsevol';
$strAnyColumn = 'Qualsevol columna';
$strAnyDatabase = 'Qualsevol base de dades';
$strAnyHost = 'Qualsevol servidor';
$strAnyTable = 'Qualsevol taula';
$strAnyUser = 'Qualsevol usuari';
$strAscending = 'Ascendent';
$strAtBeginningOfTable = 'Al principi de la taula';
$strAtEndOfTable = 'Al final de la taula';
$strAttr = 'Atributs';

$strBack = 'Enrere';
$strBeginCut = 'INICI DEL TALL';
$strBeginRaw = 'INICI DEL VOLCAT';
$strBinary = ' Binari ';
$strBinaryDoNotEdit = ' Binari - no editeu ';
$strBookmarkDeleted = 'S\'ha esborrat el bookmark.';
$strBookmarkLabel = 'Etiqueta';
$strBookmarkQuery = 'Consulta SQL registrada';
$strBookmarkThis = 'Registra aquesta consulta SQL';
$strBookmarkView = 'Nom�s mirar';
$strBrowse = 'Navega';
$strBzError = 'phpMyAdmin �s incapa� de comprimir el volcat degut a una extensi� Bz2 incorrecta en aquesta versi� de php. �s molt recomenable posar a la directiva <code>$cfg[\'BZipDump\']</code> el valor <code>FALSE</code> al fitxer de configuraci� de phpMyAdmin. Si vol utilitzar les facilitats de compresi� Bz2, �s necessari actualitzar el php a la darrera versi� disponible. Es pot consultar el informe d\'errada %s de php per a m�s detalls.';
$strBzip = '"comprimit amb bzip"';

$strCannotLogin = 'No podem connectar al servidor MySQL';
$strCantLoad = 'No puc carregar la extensi� %s,<br />comprovi la configuraci� de PHP.';
$strCantLoadMySQL = 'no s\'ha pogut carregar l\'extensi� de MySQL,<br />verifiqueu la configuraci� del PHP.';
$strCantLoadRecodeIconv = 'No es pot carregar iconv o recodificar una extensi� necess�ria per la conversi� de jocs de car�cters, configura php per permetre l\'�s d\'aquestes extensions o b� desactiva la conversi� de jocs de car�cters en phpMyAdmin.';
$strCantRenameIdxToPrimary = 'No pots canviar el nom d\'un �ndex a "PRIMARY"!';
$strCantUseRecodeIconv = 'No es pot utilitzar iconv ni libiconv ni la funci� recode_string mentre es carrega l\'extensi� d\'informes. Comprova la configuraci� de php.';
$strCardinality = 'Cardinalitat';
$strCarriage = 'Retorn de l�nia: \\r';
$strChange = 'Canvi';
$strChangeDisplay = 'Tria el camp a mostrar';
$strChangePassword = 'Canvi de contrasenya';
$strCharsetOfFile = 'Joc de car�cters de l\'arxiu:';
$strCheckAll = 'Verificar-ho tot';
$strCheckDbPriv = 'Verifica els privilegis de la base de dades';
$strCheckPrivs = 'Comprova els Permissos';
$strCheckPrivsLong = 'Comprova els Permissos per la Base de dades &quot;%s&quot;.';
$strCheckTable = 'Verifica la taula';
$strChoosePage = 'Tria una p�gina per editar';
$strColComFeat = 'Mostrant comentaris de les columnes';
$strColumn = 'Columna';
$strColumnNames = 'Nom de les columnes';
$strColumnPrivileges = 'Permissos espec�fics de columna';
$strCommand = 'Ordre';
$strComments = 'Comentaris';
$strCompleteInserts = 'Completar insercions';
$strCompression = 'Compressi�';
$strConfigFileError = 'phpMyAdmin �s incapa� de llegir el fitxer de configuraci�!<br />Aix� pot succeir si php troba un error sint�ctic en ell o b� php no pot trobar el fitxer.<br />Intenta obrir el fitxer de configuraci� directament fent servir l\'enlla� seg�ent i comprova el(s) missatge(s) d\'error que reps. En moltes ocasions una coma o punt i coma falta en algun lloc.<br />Si reps una plana en blanc, tot est� b�.';
$strConfigureTableCoord = 'Configura les coordenades per la taula %s';
$strConfirm = 'Ho vols fer realment?';
$strConnections = 'Conexions';
$strCookiesRequired = 'A partir d\'aquest punt �s necessari tenir les Cookies activades.';
$strCopyTable = 'Copia taula a (basedades<b>.</b>taula):';
$strCopyTableOK = 'La taula %s ha estat copiada a %s.';
$strCouldNotKill = 'phpMyAdmin no pot cancel.lar el fil %s. Probablement, ja �s tancat.';
$strCreate = 'Crear';
$strCreateIndex = 'Crea un �ndex a la columna:&nbsp;%s';
$strCreateIndexTopic = 'Crea un nou �ndex';
$strCreateNewDatabase = 'Crea una nova base de dades';
$strCreateNewTable = 'Crear una taula nova a la base de dades %s';
$strCreatePage = 'Crea una nova P�gina';
$strCreatePdfFeat = 'Creaci� de PDFs';
$strCriteria = 'Criteris';

$strDBGContext = 'Contexte';
$strDBGContextID = 'ID de contexte';
$strDBGHits = 'Accessos';
$strDBGLine = 'Linia';
$strDBGMaxTimeMs = 'Temps max, ms';
$strDBGMinTimeMs = 'Temps min, ms';
$strDBGModule = 'M�dul';
$strDBGTimePerHitMs = 'Temps/Acc�s, ms';
$strDBGTotalTimeMs = 'Temps total, ms';
$strData = 'Dades';
$strDataDict = 'Diccionari de Dades';
$strDataOnly = 'Nom�s dades';
$strDatabase = 'Base de dades ';
$strDatabaseHasBeenDropped = 'La Base de Dades %s s\'ha eliminat.';
$strDatabaseWildcard = 'Bases de Dades (es permeten comodins):';
$strDatabases = 'bases de dades';
$strDatabasesDropped = '%s Bases de dades s\'han esborrat correctament.';
$strDatabasesStats = 'Estad�stiques de les bases de dades';
$strDatabasesStatsDisable = 'Desactiva Estad�stiques';
$strDatabasesStatsEnable = 'Activa Estad�stiques';
$strDatabasesStatsHeavyTraffic = 'Nota: Activant les estad�stiques de Base de Dades aqui pot provocar elevat tr�fic entre el servidor Web i el de MySQL.';
$strDbPrivileges = 'Permissos especifics de Base de dades';
$strDefault = 'Defecte';
$strDefaultValueHelp = 'Per a valors per defecte, nom�s entra un valor, sense barres invertides ni cometes, fent servir aquest format: a';
$strDelete = 'Esborrar';
$strDeleteAndFlush = 'Esborra els usuaris i recarrega els permissos seguidament.';
$strDeleteAndFlushDescr = 'Aquesta �s la forma m�s clara, pero recarregar els permissos pot tardar una mica.';
$strDeleteFailed = 'No s\'ha pogut esborrar!';
$strDeleteUserMessage = 'Has esborrat l\'usuari %s.';
$strDeleted = 'La fila ha estat esborrada';
$strDeletedRows = 'Files esborrades:';
$strDeleting = 'Esborrant %s';
$strDescending = 'Descendent';
$strDisabled = 'Desactivat';
$strDisplay = 'Mostrar';
$strDisplayFeat = 'Mostrar caracter�stiques';
$strDisplayOrder = 'Ordre del llistat:';
$strDisplayPDF = 'Mostrar esquema PDF';
$strDoAQuery = 'Fer una "petici� segons exemple" (comod�: "%")';
$strDoYouReally = 'Realment vols';
$strDocu = 'Documentaci�';
$strDrop = 'Eliminar';
$strDropDB = 'Eliminar base de dades %s';
$strDropSelectedDatabases = 'Esborra les Bases de dades sel.lecionades';
$strDropTable = 'Esborrar taula';
$strDropUsersDb = 'Esborra les bases de dades que tenen els mateixos noms que els usuaris.';
$strDumpXRows = 'Volcar %s files comen�ant a la fila %s.';
$strDumpingData = 'Volcant dades de la taula';
$strDynamic = 'din�mic';

$strEdit = 'Editar';
$strEditPDFPages = 'Editar p�gines PDF';
$strEditPrivileges = 'Editar privilegis';
$strEffective = 'Efectiu';
$strEmpty = 'Buidar';
$strEmptyResultSet = 'MySQL ha retornat un conjunt buit (p.e. cap fila).';
$strEnabled = 'Activat';
$strEnd = 'Final';
$strEndCut = 'FI DEL TALL';
$strEndRaw = 'FI DEL VOLCAT';
$strEnglishPrivileges = ' Nota: Els noms dels privilegis del MySQL s�n en llengua anglesa ';
$strError = 'Errada';
$strExplain = 'Explicaci� de l\'SQL';
$strExport = 'Exportar';
$strExportToXML = 'Exportar a format XML';
$strExtendedInserts = 'Insercions ampliades';
$strExtra = 'Extra';

$strFailedAttempts = 'Intents erronis';
$strField = 'Camp';
$strFieldHasBeenDropped = 'S\'ha esborrat el camp %s';
$strFields = 'Camps';
$strFieldsEmpty = ' El comptador de camps �s buit! ';
$strFieldsEnclosedBy = 'Camps englobats per';
$strFieldsEscapedBy = 'Camps amb marca d\'escapada';
$strFieldsTerminatedBy = 'Camps acabats per';
$strFileCouldNotBeRead = 'No es pot llegir el fitxer';
$strFixed = 'fixa';
$strFlushPrivilegesNote = 'Nota: phpMyAdmin obt� els permissos de l\'usuari directament de les taules de permissos de l\' MySQL. El contingut d\'aquestes taules pot diferir dels permissos que utilitza el servidor si s\'han fet canvis manualment. En aquest cas, es necessari %srecarregar els permissos%s abans de continuar.';
$strFlushTable = 'Buidar el cach� de la taula ("FLUSH")';
$strFormEmpty = 'Falta un valor al formulari !';
$strFormat = 'Format';
$strFullText = 'Textos sencers';
$strFunction = 'Funci�';

$strGenBy = 'Generat per';
$strGenTime = 'Temps de generaci�';
$strGeneralRelationFeat = 'Caracter�stiques generals de relacions';
$strGlobalPrivileges = 'Permissos generals';
$strGlobalValue = 'Valor global';
$strGo = 'Executar';
$strGrantOption = 'Atorgar';
$strGrants = 'Atorgar';
$strGzip = '"comprimit amb gzip"';

$strHasBeenAltered = 'ha estat alterada.';
$strHasBeenCreated = 'ha estat creada.';
$strHaveToShow = 'Has d\'escollir al menys una columna per mostrar';
$strHome = 'Inici';
$strHomepageOfficial = 'Plana oficial del phpMyAdmin';
$strHomepageSourceforge = 'Plana de desc�rrega del phpMyAdmin a SourceForge';
$strHost = 'Servidor';
$strHostEmpty = 'El nom del servidor �s buit!';

$strId = 'ID';
$strIdxFulltext = 'Text sencer';
$strIfYouWish = 'Si nom�s vols carregar algunes columnes de la taula, especifica-ho amb una llista separada per comes.';
$strIgnore = 'Ignora';
$strIgnoringFile = 'Ignorant fitxer %s';
$strImportDocSQL = 'Importa Arxius docSQL';
$strImportFiles = 'Importar fitxers';
$strImportFinished = 'Importaci� finalitzada';
$strInUse = 'en �s';
$strIndex = '�ndex';
$strIndexHasBeenDropped = 'S\'ha esborrat l\'�ndex %s';
$strIndexName = 'Nom d\'�ndex:';
$strIndexType = 'Tipus d\'�ndex:';
$strIndexes = 'Indexos';
$strInsecureMySQL = 'El vostre fitxer de configuraci� t� par�metres (root sense contrasenya) que corresponen al compte privilegiat predetermitat de MySQL. El servidor MySQL est� funcionant amb aquests valors, el que significa un forat de seguretat, i s\'exposa a intrusions, pel que recomanem la reparaci� urgent d\'aquest forat de seguretat.';
$strInsert = 'Inserta';
$strInsertAsNewRow = 'Inserir com a nova fila';
$strInsertNewRow = 'Inserir nova fila';
$strInsertTextfiles = 'Inserir fitxers de text a la taula';
$strInsertedRows = 'Files Inserides:';
$strInstructions = 'Instruccions';
$strInvalidName = '"%s" �s una paraula reservada, no es pot fer servir com a nom de base de dades/taula/camp.';

$strJumpToDB = 'V�s a la Base de Dades &quot;%s&quot;.';
$strJustDelete = 'Nom�s esborra els usuaris de les taules de permissos.';
$strJustDeleteDescr = 'Els usuaris &quot;esborrats&quot; encara tindr�n acc�s al servidor com fins ara mentre no es recarreguin els permissos.';

$strKeepPass = 'No canvi�s la contrasenya';
$strKeyname = 'Nom Clau';
$strKill = 'Finalitzar';

$strLaTeX = 'LaTeX';
$strLandscape = 'Horitzontal';
$strLength = 'Longitud';
$strLengthSet = 'Longitud/Valors*';
$strLimitNumRows = 'registres per plana';
$strLineFeed = 'Salt de l�nia: \\n';
$strLines = 'L�nies';
$strLinesTerminatedBy = 'L�nies terminades per';
$strLinkNotFound = 'L\'enlla� no s\'ha trobat';
$strLinksTo = 'Enlla�os a';
$strLocalhost = 'Local';
$strLocationTextfile = 'Ubicaci� del fitxer de text';
$strLogPassword = 'Contrasenya:';
$strLogUsername = 'Nom d\'Usuari:';
$strLogin = 'Identificaci�';
$strLoginInformation = 'Informaci� d\'Identificaci�';
$strLogout = 'Sortir';

$strMissingBracket = 'Falta una clau (\{ o b� \})';
$strModifications = 'Les modificacions han estat guardades';
$strModify = 'Modificar';
$strModifyIndexTopic = 'Modifica un �ndex';
$strMoreStatusVars = 'M�s  variables d\'estat';
$strMoveTable = 'Mou taula a (base dades<b>.</b>taula):';
$strMoveTableOK = 'Taula %s moguda a %s.';
$strMySQLCharset = 'Joc de car�cters de MySQL';
$strMySQLReloaded = 'MySQL reiniciat.';
$strMySQLSaid = 'MySQL diu: ';
$strMySQLServerProcess = 'MySQL %pma_s1% executant-se a %pma_s2% com a %pma_s3%';
$strMySQLShowProcess = 'Mostrar processos';
$strMySQLShowStatus = 'Mostra la informaci� de funcionament del MySQL';
$strMySQLShowVars = 'Mostra les variables de sistema del MySQL';

$strName = 'Nom';
$strNext = 'Seg�ent';
$strNo = 'No';
$strNoDatabases = 'No hi ha Bases de Dades';
$strNoDatabasesSelected = 'No hi han Bases de dades sel.leccionades.';
$strNoDescription = 'Sense Descripci�';
$strNoDropDatabases = 'Instrucci� "DROP DATABASE" desactivada.';
$strNoExplain = 'Saltar l\'explicaci� de l\'SQL';
$strNoFrames = 'phpMyAdmin �s m�s f�cil amb un navegador que <b>suporti marcs (frames)</b>.';
$strNoIndex = 'No s\'ha definit l\'�ndex!';
$strNoIndexPartsDefined = 'No s\'han definit parts de l\'�ndex!';
$strNoModification = 'Sense canvis';
$strNoPassword = 'Sense contrasenya';
$strNoPhp = 'Sense codi PHP';
$strNoPrivileges = 'Sense privilegis';
$strNoQuery = 'No �s una consulta SQL!';
$strNoRights = 'No tens prou privilegis per visualitzar aquesta informaci�!';
$strNoTablesFound = 'Base de dades sense taules.';
$strNoUsersFound = 'No s\'han trobat usuaris.';
$strNoUsersSelected = 'No s\'han sel.leccionat usuaris.';
$strNoValidateSQL = 'Saltar la Validaci� de l\'SQL';
$strNone = 'Res';
$strNotNumber = 'Aquest valor no �s un n�mero!';
$strNotOK = 'Incorrecte';
$strNotSet = 'Taula <b>%s</b> no trobada o no definida a %s';
$strNotValidNumber = ' no es un n�mero de columna v�lid!';
$strNull = 'Nul';
$strNumSearchResultsInTable = '%s resultat(s) a la taula <i>%s</i>';
$strNumSearchResultsTotal = '<b>Total:</b> <i>%s</i> resultat(s)';
$strNumTables = 'Taules';

$strOK = 'Correcte';
$strOftenQuotation = 'Marques sint�ctiques. OPCIONALMENT vol dir que nom�s els camps de tipus char i varchar van "tancats dins" "-aquest car�cter.';
$strOperations = 'Operacions';
$strOptimizeTable = 'Optimitza la taula';
$strOptionalControls = 'Opcional. Controla com llegir o escriure car�cters especials.';
$strOptionally = 'OPCIONALMENT';
$strOptions = 'Opcions';
$strOr = 'O';
$strOverhead = 'Defragmentat';

$strPHP40203 = 'S\'esta fent servir la versi� 4.2.3 de PHP, que t� un serios error amb cadenes de multi-byte (mbstring). Mira l\'informe d\'error 19404 de PHP. No es recomana aquesta versi� de PHP per treballar amb phpMyAdmin.';
$strPHPVersion = 'PHP versi�';
$strPageNumber = 'N�mero de p�gina:';
$strPartialText = 'Textos Parcials';
$strPassword = 'Contrasenya';
$strPasswordChanged = 'La contrasenya per a %s s\'ha canviat correctament.';
$strPasswordEmpty = 'La contrasenya �s buida!';
$strPasswordNotSame = 'Les contrasenyes no coincideixen!';
$strPdfDbSchema = 'Esquema de la base de dades "%s" - P�gina %s';
$strPdfInvalidPageNum = 'N�mero de p�gina PDF no definida!';
$strPdfInvalidTblName = 'La taula "%s" no existeix!';
$strPdfNoTables = 'No hi ha taules';
$strPerHour = 'per hora';
$strPhp = 'Crear codi PHP';
$strPmaDocumentation = 'Documentaci� de phpMyAdmin';
$strPmaUriError = 'La directiva <tt>$cfg[\'PmaAbsoluteUri\']</tt> HA d\'estar al fitxer de configuraci�!';
$strPortrait = 'Vertical';
$strPos1 = 'Inici';
$strPrevious = 'Anterior';
$strPrimary = 'Prim�ria';
$strPrimaryKey = 'Clau Prim�ria';
$strPrimaryKeyHasBeenDropped = 'S\'ha esborrat la clau principal';
$strPrimaryKeyName = 'El nom de la clau principal ha de ser ... PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>ha de ser</b> el nom i <b>nom�s</b>el nom de la clau principal!)';
$strPrint = 'Imprimir';
$strPrintView = 'Imprimir vista';
$strPrivDescAllPrivileges = 'Inclou tots els permissos excepte GRANT (atorgar).';
$strPrivDescAlter = 'Permet alterar l\'estructura de taules existents.';
$strPrivDescCreateDb = 'Permet crear noves bases de dades i taules.';
$strPrivDescCreateTbl = 'Permet crear noves taules.';
$strPrivDescCreateTmpTable = 'Permet crear taules temporals.';
$strPrivDescDelete = 'Permet esborrar dades.';
$strPrivDescDropDb = 'Permet eliminar bases de dades i taules.';
$strPrivDescDropTbl = 'Permet eliminar taules.';
$strPrivDescExecute = 'Permet executar processos enmagatzemats (stored procedures); No t� efecte en aquesta versi� de MySQL.';
$strPrivDescFile = 'Permet importar i exportar dades amb fitxers externs.';
$strPrivDescGrant = 'Permet afegir usuaris i permissos sense tenir que recarregar les taules de permissos.';
$strPrivDescIndex = 'Permet crear i eliminar indexos.';
$strPrivDescInsert = 'Permet inserir i modificar dades.';
$strPrivDescLockTables = 'Permet bloquejar taules per l\'actual fil d\'execuci�.';
$strPrivDescMaxConnections = 'Limita el numero de noves connexions que pot obrir l\'usuari per hora.';
$strPrivDescMaxQuestions = 'Limita el numero de consultes que pot enviar l\'usuari al servidor per hora.';
$strPrivDescMaxUpdates = 'Limita el numero d\'ordres que pot executar l\'usuari canviant qualsevol taula o base de dades per hora.';
$strPrivDescProcess3 = 'Permet cancel.lar processos d\'altres usuaris.';
$strPrivDescProcess4 = 'Permet veure completament les consultes a la llista de processos.';
$strPrivDescReferences = 'No t� efecte en aquesta versi� de MySQL.';
$strPrivDescReload = 'Permet recarregar les configuracions del servidor i buidar les seves cach�s.';
$strPrivDescReplClient = 'Dona el dret a l\'usuari de preguntar quins servidors mestres / esclaus hi ha.';
$strPrivDescReplSlave = 'Es necessari per a la replicaci� en servidors esclaus.';
$strPrivDescSelect = 'Permet llegir dades.';
$strPrivDescShowDb = 'Dona acc�s a la llista completa de bases de dades.';
$strPrivDescShutdown = 'Permet parar el servidor.';
$strPrivDescSuper = 'Permet connectar, encara que s\'hagi arribat al m�xim numero de connexions perm�s; Es necessari per moltes operacions d\'administraci� com ara establir variables globals o b� cancel.lar fils d\'execuci� d\'altres usuaris.';
$strPrivDescUpdate = 'Permet canviar dades.';
$strPrivDescUsage = 'Sense permissos.';
$strPrivileges = 'Privilegis';
$strPrivilegesReloaded = 'Els permissos s\'han recarregat correctament.';
$strProcesslist = 'Llista de processos';
$strProperties = 'Propietats';
$strPutColNames = 'Posa els noms de camp a la primera fila';

$strQBE = 'Consulta segons exemple';
$strQBEDel = 'Sup';
$strQBEIns = 'Ins';
$strQueryOnDb = 'Consulta SQL a la base de dades <b>%s</b>:';
$strQueryStatistics = '<b>Estad�stiques de Consultes</b>: Des de l\'�ltim inici, s\'han enviat %s consultes al servidor.';
$strQueryType = 'Tipus de consulta';

$strReType = 'Reescriure';
$strReceived = 'Rebut';
$strRecords = 'Registres';
$strReferentialIntegrity = 'Comprova la integritat referencial:';
$strRelationNotWorking = 'Les caracter�stiques addicionals per treballar amb taules enlla�ades s\'han desactivat. Per saber perqu� clica %saqu�%s.';
$strRelationView = 'Vista de Relacions';
$strRelationalSchema = 'Esquema Relacional';
$strReloadFailed = 'El reinici del MySQL ha fallat';
$strReloadMySQL = 'Rellegir el MySQL';
$strReloadingThePrivileges = 'Recarregant permissos';
$strRememberReload = 'Recorda reiniciar el MySQL';
$strRemoveSelectedUsers = 'Treure els usuaris sel.leccionats';
$strRenameTable = 'Renombrar les taules a';
$strRenameTableOK = 'La taula %s ha canviat de nom. Ara es diu %s';
$strRepairTable = 'Reparar taula';
$strReplace = 'Substituir';
$strReplaceTable = 'Substituir les dades de la taula pel fitxer ';
$strReset = 'Esborrar';
$strResourceLimits = 'Limit de recursos';
$strRevoke = 'Revocar';
$strRevokeAndDelete = 'Denega tots els permissos actius dels usuaris i els esborra despr�s.';
$strRevokeAndDeleteDescr = 'Els usuaris encara tindran el permis USAGE fins que es recarreguin els permissos.';
$strRevokeGrant = 'Revocar garantia';
$strRevokeGrantMessage = 'Has revocat la garantia de privilegis per a %s';
$strRevokeMessage = 'Has revocat els privilegis per %s';
$strRevokePriv = 'Revocar privilegis';
$strRowLength = 'Longitud de fila';
$strRowSize = 'Mida de fila ';
$strRows = 'Fila';
$strRowsFrom = 'Files comen�ant des de';
$strRowsModeHorizontal = 'horitzontal';
$strRowsModeOptions = ' en mode %s i repeteix cap�aleres despr�s de %s cel�les ';
$strRowsModeVertical = 'vertical';
$strRowsStatistic = 'Estad�stica de files';
$strRunQuery = 'Executa consulta';
$strRunSQLQuery = 'Executa consulta/s SQL a la Base de Dades %s';
$strRunning = 'funcionant a %s';

$strSQL = 'SQL';
$strSQLParserBugMessage = '�s possible que hagueu trobat un error a l\'int�rpret SQL. Si us plau, comproveu la sintaxi de la consulta i verifiqueu que les cometes estiguin al seu lloc i facin parelles. Un altra possible causa de l\'errada �s que estigueu pujant un arxiu amb dades bin�ries per fora de l\'�rea de text delimitada. Tamb� podeu provar la consulta a la interf�cie de comandes de MySQL. La sortida seg�ent generada pel servidor MySQL, si n\'hi ha, pot ajudar-vos a diagnosticar el problema. Si encara teniu problemes o si l\'int�rpret falla i l\'interf�cie de comandes funciona, redu�u la consulta a la part de l\'SQL que produeix l\'errada, i envieu un informe d\'error amb la cadena de dades de la secci� de TALL indicada avall:';
$strSQLParserUserError = 'Sembla que hi ha un error a la consulta SQL. La sortida seg�ent generada pel servidor MySQL, si n\'hi ha, pot ajudar-vos a diagnosticar el problema';
$strSQLQuery = 'crida SQL';
$strSQLResult = 'Resultat SQL';
$strSQPBugInvalidIdentifer = 'Identificador Incorrecte';
$strSQPBugUnclosedQuote = 'Cometes sense tancar';
$strSQPBugUnknownPunctuation = 'Signe de puntuaci� desconegut';
$strSave = 'Guardar';
$strScaleFactorSmall = 'El factor de l\'escala �s massa petit per posar l\'esquema en una p�gina';
$strSearch = 'Cercar';
$strSearchFormTitle = 'Cercar a la base de dades';
$strSearchInTables = 'A la(les) taula(es):';
$strSearchNeedle = 'Paraula(es) o valor(s) a cercar (comod�: "%"):';
$strSearchOption1 = 'al menys una d\'aquestes paraules';
$strSearchOption2 = 'Totes les paraules';
$strSearchOption3 = 'La frase exacta';
$strSearchOption4 = 'com a expressi� regular';
$strSearchResultsFor = 'Resultats de la recerca per a "<i>%s</i>" %s:';
$strSearchType = 'Trobat:';
$strSelect = 'Selecciona';
$strSelectADb = 'Selecciona una Base de Dades';
$strSelectAll = 'Selecciona Tot';
$strSelectFields = 'Selecciona els camps (un com a m�nim):';
$strSelectNumRows = 'en consulta';
$strSelectTables = 'Selecciona Taules';
$strSend = 'enviar';
$strSent = 'Enviat';
$strServer = 'Servidor %s';
$strServerChoice = 'Elecci� de Servidor';
$strServerStatus = 'Informaci� d\'execuci�';
$strServerStatusUptime = 'Aquest servidor MySQL �s en marxa durant %s. Es va iniciar en %s.';
$strServerTabProcesslist = 'Processos';
$strServerTabVariables = 'Variables';
$strServerTrafficNotes = '<b>Ocupaci� de servidor</b>: Aquestes taules mostren la ocupaci� de la xarxa d\'aquest servidor MySQL des de l\'�ltim inici.';
$strServerVars = 'Variables i settings del servidor';
$strServerVersion = 'Versi� del servidor';
$strSessionValue = 'Valor de sessi�';
$strSetEnumVal = 'Si el tipus de camp �s "enum" o "set", entra els valors fent servir el format: \'a\',\'b\',\'c\'...<br />Si mai necessites escriure la barra invertida ("\") o la cometa simple ("\'") abans d\'aquests valors, escriu barres invertides (per exemple \'\\\\xyz\' o \'a\\\'b\').';
$strShow = 'Mostra';
$strShowAll = 'Mostra tot';
$strShowColor = 'Mostra color';
$strShowCols = 'Mostra columnes';
$strShowDatadictAs = 'Format del Diccionari de Dades';
$strShowGrid = 'Mostra graella';
$strShowPHPInfo = 'Mostra informaci� de PHP';
$strShowTableDimension = 'Mostra dimensi� de les taules';
$strShowTables = 'Mostra taules';
$strShowThisQuery = ' Mostra aquesta consulta de nou ';
$strShowingRecords = 'Mostrant registres: ';
$strSingly = '(singly)';
$strSize = 'Mida';
$strSort = 'Classificaci�';
$strSpaceUsage = 'Utilitzaci� d\'espai';
$strSplitWordsWithSpace = 'Paraules separades per un espai (" ").';
$strStatement = 'Sent�ncies';
$strStatus = 'Estat';
$strStrucCSV = 'dades CSV ';
$strStrucData = 'Estructura i dades';
$strStrucDrop = 'Afegir \'drop table\'';
$strStrucExcelCSV = 'CSV per dades de Ms Excel';
$strStrucOnly = 'Nom�s l\'estructura';
$strStructPropose = 'Proposa una estructura de taula';
$strStructure = 'Estructura';
$strSubmit = 'Enviar';
$strSuccess = 'La vostra comanda SQL ha estat executada amb �xit';
$strSum = 'Suma';

$strTable = 'Taula';
$strTableComments = 'Comentaris de la taula';
$strTableEmpty = 'El nom de la taula �s buit!';
$strTableHasBeenDropped = 'S\'ha esborrat la taula %s';
$strTableHasBeenEmptied = 'S\'ha buidat la taula %s';
$strTableHasBeenFlushed = 'S\'ha buidat el cach� de la taula %s';
$strTableMaintenance = 'Manteniment de la taula';
$strTableOfContents = 'Taula de continguts';
$strTableStructure = 'Estructura de la taula';
$strTableType = 'Tipus de taula';
$strTables = '%s taula(es)';
$strTblPrivileges = 'Permissos especifics de taula';
$strTextAreaLength = ' A causa de la seva longitud,<br /> aquest camp pot no ser editable ';
$strTheContent = 'El contingut del fitxer especificat ha estat inserit.';
$strTheContents = 'El contingut del fitxer substituir� els continguts de les taules seleccionades a les files que contenen la mateixa clau �nica o prim�ria';
$strTheTerminator = 'El separador de camps.';
$strThisHost = 'Aquest Host';
$strThisNotDirectory = 'Aix� no �s un directori';
$strThreadSuccessfullyKilled = 'Fil %s cancel.lat correctament.';
$strTime = 'Temps';
$strTotal = 'total';
$strTotalUC = 'Total';
$strTraffic = 'Tr�fic';
$strType = 'Tipus';

$strUncheckAll = 'Deseleccionar tot';
$strUnique = '�nica';
$strUnselectAll = 'Deselecciona tot';
$strUpdatePrivMessage = 'Heu actualitzat els privilegis de %s.';
$strUpdateProfile = 'Actualitza perfil:';
$strUpdateProfileMessage = 'S\'ha actualitzat el perfil.';
$strUpdateQuery = 'Actualitza consulta';
$strUsage = '�s';
$strUseBackquotes = 'Usa "backquotes" amb taules i noms de camps';
$strUseTables = 'Usa Taules';
$strUseTextField = 'Usa camp de texte';
$strUser = 'Usuari';
$strUserAlreadyExists = 'L\'usuari %s ja existeix!';
$strUserEmpty = 'El nom d\'usuari �s buit!';
$strUserName = 'Nom d\'usuari';
$strUserNotFound = 'No s\'ha trobat l\'usuari sel.leccionat a la taula de permissos.';
$strUserOverview = 'Informaci� general de l\'usuari';
$strUsers = 'Usuaris';
$strUsersDeleted = 'S\'han esborrat correctament els usuaris sel.leccionats.';

$strValidateSQL = 'Validar l\'SQL';
$strValidatorError = 'No s\'ha pogut iniciar el validador SQL. Si us plau, comproveu que teniu instal�lats els m�duls de PHP necessaris tal i com s\'indica a la %sdocumentaci�%s.';
$strValue = 'Valor';
$strVar = 'Variable';
$strViewDump = 'Veure un esquema de la taula';
$strViewDumpDB = 'Veure l\'esquema de la base de dades';

$strWebServerUploadDirectory = 'Directori de pujada d\'arxius del servidor web';
$strWebServerUploadDirectoryError = 'No est� disponible el directori indicat per pujar arxius';
$strWelcome = 'Benvingut a %s';
$strWithChecked = 'Amb marca:';
$strWritingCommentNotPossible = 'No es pot gravar aquest comentari';
$strWritingRelationNotPossible = 'No es pot gravar aquesta relaci�';
$strWrongUser = 'Usuari i/o clau erronis. Acc�s denegat.';

$strYes = 'Si';

$strZeroRemovesTheLimit = 'Nota: Establint aquestes opcions a 0 (zero) treu el limit.';
$strZip = '"comprimit amb zip"';
// To translate

$strGlobal = 'global';  //to translate
$strDbSpecific = 'database-specific';  //to translate
$strUsersHavingAccessToDb = 'Users having access to &quot;%s&quot;';  //to translate
$strChangeCopyUser = 'Change Login Information / Copy User';  //to translate
$strChangeCopyMode = 'Create a new user with the same privileges and ...';  //to translate
$strChangeCopyModeCopy = '... keep the old one.';  //to translate
$strChangeCopyModeJustDelete = ' ... delete the old one from the user tables.';  //to translate
$strChangeCopyModeRevoke = ' ... revoke all active privileges from the old one and delete it afterwards.';  //to translate
$strChangeCopyModeDeleteAndReload = ' ... delete the old one from the user tables and reload the privileges afterwards.';  //to translate
$strWildcard = 'wildcard';  //to translate
?>
