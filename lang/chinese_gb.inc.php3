<?php
/* $Id$ */

/**
 * Last translation by: Siu Sun <siusun@best-view.net>
 */

$charset = 'gb2312';
$text_dir = 'ltr';
$left_font_family = 'sans-serif';
$right_font_family = 'sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
$byteUnits = array('Bytes', 'KB', 'MB', 'GB');

$day_of_week = array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat');
$month = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%B %d, %Y at %I:%M %p';

$strAPrimaryKey = '主键已经添加到 %s';
$strAccessDenied = '访问被拒绝';
$strAction = '执行操作';
$strAddDeleteColumn = '添加/删除 选择栏';
$strAddDeleteRow = '添加/删除 筛选列';
$strAddNewField = '添加新字段';
$strAddPriv = '添加新权限';
$strAddPrivMessage = '您已经为下此使用者添加了新权限.';
$strAddSearchConditions = '添加检索条件 ("where" 语句的主体)：';
$strAddToIndex = '添加 &nbsp;%s&nbsp; 组索引栏';
$strAddUser = '添增使用者';
$strAddUserMessage = '您已添增了一个新使用者.';
$strAffectedRows = '影响列数:';
$strAfter = '在 %s 之后';
$strAfterInsertBack = '返回';
$strAfterInsertNewInsert = '添加一笔记录';
$strAll = '全部';
$strAlterOrderBy = '根据栏位内容排序记录';
$strAnIndex = '索引已经添加到 %s';
$strAnalyzeTable = '分析数据表';
$strAnd = '与';
$strAny = '任何';
$strAnyColumn = '任何栏位';
$strAnyDatabase = '任何数据库';
$strAnyHost = '任何主机';
$strAnyTable = '任何数据表';
$strAnyUser = '任何使用者';
$strAscending = '递增';
$strAtBeginningOfTable = '于数据表开头';
$strAtEndOfTable = '于数据表尾端';
$strAttr = '属性';

$strBack = '返回';
$strBinary = ' 二进制码 ';
$strBinaryDoNotEdit = ' 二进制码 - 无法编辑 ';
$strBookmarkDeleted = '标签已经删除.';
$strBookmarkLabel = '标签名称';
$strBookmarkQuery = 'SQL 语法书签';
$strBookmarkThis = '加入此 SQL 语法到书签';
$strBookmarkView = '查看';
$strBrowse = '浏览';
$strBzip = '"bzipped"';

$strCantLoadMySQL = '不能载入 MySQL 附件,<br />请检查 PHP 的组态设定';
$strCantLoadRecodeIconv = '未能读取 iconv 或重新编码程式来作文字编码转换, 请设定 php 来启动这些模组或取消 phpMyAdmin 使用文字编码转换功能.';
$strCantRenameIdxToPrimary = '无法将索引更名为 PRIMARY!';
$strCantUseRecodeIconv = '当文编码模组读取後,未能使用 iconv 、 libiconv 或 recode_string 功能. 请检查您的 php 设定.';
$strCardinality = '组别';
$strCarriage = '回车: \\r';
$strChange = '改变';
$strChangeDisplay = '选择显示之字段';
$strChangePassword = '更改密码';
$strCheckAll = '全选';
$strCheckDbPriv = '检查数据库权限';
$strCheckTable = '检查数据表';
$strChoosePage = '请选择需要编辑的页码';
$strColumn = '栏位';
$strColumnNames = '栏位名';
$strComments = '注解';
$strCompleteInserts = '使用完整添增指令';
$strConfigFileError = 'phpMyAdmin 未能读取您的设定档! 这可能是因为 php 找到语法上的错误或 php 未能找到档案而成.<br />请尝试直接按下下方的连结开启并查看 php 的错误信息. 通常的错误都来自某处漏了引号或分别.<br />如果按下连结後出现空白页, 即代表没有任何问题.';
$strConfigureTableCoord = '请设定数据表 %s 内的坐标';
$strConfirm = '您确定要这样做?';
$strCookiesRequired = 'Cookies 必须启动才能登入.';
$strCopyTable = '复制数据表到： (格式为 数据库名称<b>.</b>数据表名称):';
$strCopyTableOK = '数据表 %s 已经成功复制为 %s。';
$strCreate = '建立';
$strCreateIndex = '新增 &nbsp;%s&nbsp; 组索引栏';
$strCreateIndexTopic = '添加一组索引';
$strCreateNewDatabase = '建立一个新的数据库';
$strCreateNewTable = '建立一个新的数据表与数据库 %s';
$strCreatePage = '建立新一页';
$strCriteria = '规范';

$strData = '数据';
$strDataOnly = '只有数据';
$strDatabase = '数据库 ';
$strDatabaseHasBeenDropped = '数据库 %s 已被删除';
$strDatabaseWildcard = '数据库 (允许使用万用字符):';
$strDatabases = '数据库';
$strDatabasesStats = '数据库统计';
$strDefault = '缺省值';
$strDelete = '删除';
$strDeleteFailed = '删除失败!';
$strDeleteUserMessage = '您已经将用户 %s 删除.';
$strDeleted = '该记录已经被删除。';
$strDeletedRows = '已删除栏数:';
$strDescending = '递减';
$strDisplay = '显示';
$strDisplayOrder = '显示次序';
$strDisplayPDF = '显示 PDF 图表';
$strDoAQuery = '请执行 "查询示例" (通配符: "%")';
$strDoYouReally = '请确认要 ';
$strDocu = '文档';
$strDrop = '丢弃';
$strDropDB = '丢弃数据库 %s';
$strDropTable = '删除数据表';
$strDumpingData = '导出下面的数据库内容';
$strDumpXRows = '备份 %s 列, 由 %s 列开始.';
$strDynamic = '动态';

$strEdit = '编辑';
$strEditPDFPages = '编辑 PDF 页码';
$strEditPrivileges = '编辑权限';
$strEffective = '有效';
$strEmpty = '清空';
$strEmptyResultSet = 'MySQL 返回的查询结果为空。 (原因可能为：没有找到符合条件的记录。)';
$strFieldsEnclosedBy = '「栏位」使用字符：';
$strFieldsEscapedBy = '「ESCAPE」使用字符：';
$strFieldsTerminatedBy = '「栏位分隔」使用字符：';
$strEnd = '结束';
$strEnglishPrivileges = ' 注意: MySQL 权限名称会被解释成英文 ';
$strError = '错误';
$strExplain = '说明 SQL 语句';
$strExport = '输出';
$strExportToXML = '输出到 XML 格式';
$strExtendedInserts = '伸延添加模式';
$strExtra = '额外';

$strField = '字段';
$strFieldHasBeenDropped = '数据表 %s 已被删除';
$strFields = '字段';
$strFieldsEmpty = ' 栏位总数是空的! ';
$strFieldsEnclosedBy = '「栏位」使用字元：';
$strFieldsEscapedBy = '「ESCAPE」使用字元：';
$strFieldsTerminatedBy = '「栏位分隔」使用字元：';
$strFixed = '固定';
$strFlushTable = '强迫更新资料表 ("FLUSH")';
$strFormEmpty = '表格内缺少了一些资料!';
$strFormat = '格式';
$strFullText = '显示完整文字';
$strFunction = '功能';

$strGenBy = '建立';
$strGenTime = '建立日期';
$strGo = '开始';
$strGrants = 'Grants'; // should expressed in English
$strGzip = '"gzipped"';

$strHasBeenAltered = '已经被修改。';
$strHasBeenCreated = '已经建立。';
$strHaveToShow = '您需要选择最少显示一行栏位';
$strHome = '主目录';
$strHomepageOfficial = 'phpMyAdmin 官方网站';
$strHomepageSourceforge = 'phpMyAdmin 下载网页';
$strHost = '主机';
$strHostEmpty = '主机名称是空的!';

$strIdxFulltext = '全文检索';
$strIfYouWish = '如果你要指定调入的字段，那么请给出用逗号隔开的字段列表。';
$strIgnore = '忽略';
$strInUse = '使用中';
$strIndex = '索引';
$strIndexHasBeenDropped = '索引 %s 已被删除';
$strIndexName = '索引名称&nbsp;:';
$strIndexType = '索引类型&nbsp;:';
$strIndexes = '索引';
$strInsert = '插入';
$strInsertAsNewRow = '添加一笔记录';
$strInsertNewRow = '插入新记录';
$strInsertTextfiles = '从文本文件中提取数据，插入到数据表：';
$strInsertedRows = '新增列数:';
$strInstructions = '指示';
$strInvalidName = '"%s" 是一个保留字,您不能将保留字使用为 资料库/资料表/栏位 名称.';

$strKeepPass = '请不要更改密码';
$strKeyname = '键名';
$strKill = 'Kill'; //should expressed in English

$strLength = '长度';
$strLengthSet = '长度/集合*';
$strLimitNumRows = '笔记录/每页';
$strLineFeed = '换行：\\n';
$strLines = '行数 ';
$strLinesTerminatedBy = '「下一行」使用字符：';
$strLinkNotFound = '找不到连结';
$strLinksTo = '连结到';
$strLocationTextfile = '文本文件的位置';
$strLogPassword = '密码:';
$strLogUsername = '登入名称:';
$strLogin = '登入';
$strLogout = '退出系统';

$strMissingBracket = '找不到括号';
$strModifications = '修改后的数据已经存盘。';
$strModify = '修改';
$strModifyIndexTopic = '修改索引';
$strMoveTable = '移动数据表到：(格式为 数据库名称<b>.</b>数据表名称)';
$strMoveTableOK = '数据表 %s 已经移动到 %s.';
$strMySQLCharset = 'MySQL 文字编码';
$strMySQLReloaded = 'MySQL 重新启动完成。';
$strMySQLSaid = 'MySQL 返回：';
$strMySQLServerProcess = 'MySQL 版本 %pma_s1% 在 %pma_s2% 执行，登入者为 %pma_s3%';
$strMySQLShowProcess = '显示进程';
$strMySQLShowStatus = '显示 MySQL 的运行信息';
$strMySQLShowVars = '显示 MySQL 的系统变量';

$strName = '名字';
$strNext = '下一个';
$strNo = '否';
$strNoDatabases = '没有数据库';
$strNoDescription = '没有说明';
$strNoDropDatabases = '"DROP DATABASE" 指令已经停用.';
$strNoFrames = 'phpMyAdmin 较为适合使用在支持<b>页框</b>的浏览器.';
$strNoIndex = '没有已定义的索引!';
$strNoIndexPartsDefined = '部份索引资料还未定义!';
$strNoModification = '没有变更';
$strNoPassword = '不用密码';
$strNoPhp = '移除 PHP 程式码';
$strNoPrivileges = '没有权限';
$strNoQuery = '没有 SQL 语句!';
$strNoRights = '您现在没有足够的权限!';
$strNoTablesFound = '数据库中没有数据表。';
$strNotSet = '<b>%s</b> 数据表找不到或还未在 %s 设定';
$strNoUsersFound = '找不到使用者';
$strNone = '不适用';
$strNotNumber = '这不是一个数字!';
$strNotValidNumber = ' 不是有效的列数!';
$strNull = 'Null';
$strNumSearchResultsInTable = '%s 项资料符合 - 於数据表 <i>%s</i>';
$strNumSearchResultsTotal = '<b>总计:</b> <i>%s</i> 项资料符合';

$strOftenQuotation = '通常为引号。 ＂选中“ 表示使用引号。因为只有 char 和 varchar 类型的数据需要用引号括起来。';
$strOperations = '操作';
$strOptimizeTable = '最佳化数据表';
$strOptionalControls = '可选。用于读取或写入特殊的字符。';
$strOptionally = '随意';
$strOptions = '选项';
$strOr = '或';
$strOverhead = '多余';

$strPageNumber = '页码:';
$strPHPVersion = 'PHP 版本';
$strPartialText = '显示部份文字';
$strPassword = '密码';
$strPasswordEmpty = '密码是空的!';
$strPasswordNotSame = '密码并非相同!';
$strPdfDbSchema = '"%s" 数据库概要 - 第 %s 页';
$strPdfInvalidPageNum = 'PDF 页码没有设定!';
$strPdfInvalidTblName = '数据表 "%s" 不存在!';
$strPhp = '建立 PHP 程式码';
$strPmaDocumentation = 'phpMyAdmin 说明文本';
$strPmaUriError = '必须设定 <tt>$cfg[\'PmaAbsoluteUri\']</tt> 在设定档案内!';
$strPos1 = '开始';
$strPrevious = '前一个';
$strPrimary = '键名';
$strPrimaryKey = '主键';
$strPrimaryKeyHasBeenDropped = '主键已被删除';
$strPrimaryKeyName = '主键的名称必须称为 PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>必须</b>是主键的名称以及是<b>唯一</b>一组主键!)';
$strPrintView = '打印检视';
$strPrivileges = '权限';
$strProperties = '属性';

$strQBE = '查询模板';
$strQBEDel = '删除';
$strQBEIns = '添加';
$strQueryOnDb = '在资料库 <b>%s</b> 执行 SQL 语句:';

$strReType = '重新输入';
$strRecords = '记录';
$strReferentialIntegrity = '检查指示完整性:';
$strRelationView = '联系检视';
$strReloadFailed = 'MySQL 重起失败。';
$strReloadMySQL = '重起 MySQL';
$strRememberReload = '请重新启动.';
$strRenameTable = '将数据表改名为';
$strRenameTableOK = '数据表 %s 名字已经被该成 %s。';
$strRepairTable = '修复数据表';
$strReplace = '替换';
$strReplaceTable = '将数据表的数据用以下文本文件替换：';
$strReset = '重置';
$strRevoke = '撤回';
$strRevokeGrant = '撤回 Grant 权限';
$strRevokeGrantMessage = '您已撤回以下这位使用者的 Grant 权限: %s';
$strRevokeMessage = '您已撤回下面这位使用者的权限: %s';
$strRevokePriv = '撤回权限';
$strRowLength = '数据列长度';
$strRowSize = ' 数据列大小 ';
$strRows = '数据列列数';
$strRowsFrom = '笔记录，开始列数:';
$strRowsModeHorizontal = '水平';
$strRowsModeOptions = '显示为 %s 方式 及 每隔 %s 行显示栏名';
$strRowsModeVertical = '垂直';
$strRowsStatistic = '数据列统计数值';
$strRunQuery = '执行查询';
$strRunSQLQuery = '在数据库 %s 执行以下指令';
$strRunning = '运行于 %s';

$strSQLQuery = 'SQL 语句';
$strSave = '存储';
$strScaleFactorSmall = '比例倍数太细, 无法将图表放在一页内';
$strSearch = '搜索';
$strSearchFormTitle = '搜索数据库';
$strSearchInTables = '於以下数据表:';
$strSearchNeedle = '寻找之文字或数值 (万用字元: "%"):';
$strSearchOption1 = '任何一组文字';
$strSearchOption2 = '所有文字';
$strSearchOption3 = '完整词语';
$strSearchOption4 = '以规则表示法 (regular expression) 搜索';
$strSearchResultsFor = '搜索 "<i>%s</i>" 的结果 %s:';
$strSearchType = '寻找:';
$strSelect = '选择';
$strSelectADb = '请选择数据库';
$strSelectAll = '全选';
$strSelectFields = '至少选择一个字段：';
$strSelectNumRows = '查询中';
$strSelectTables = '选择数据表';
$strSend = '发送';
$strServerChoice = '选择伺服机';
$strServerVersion = '伺服机版本';
$strSetEnumVal = '如栏位格式是 "enum" 或 "set", 请使用以下的格式输入: \'a\',\'b\',\'c\'...<br />如在数值上需要输入反斜线 (\) 或单引号 (\') , 请再加上反斜线 (例如 \'\\\\xyz\' or \'a\\\'b\').';
$strShow = '显示';
$strShowAll = '显示全部';
$strShowColor = '显示颜色';
$strShowCols = '显示栏';
$strShowGrid = '显示框格';
$strShowPHPInfo = '显示 PHP 资讯';
$strShowTableDimension = '显示表格大小';
$strShowTables = '显示数据表';
$strShowThisQuery = ' 重新显示 SQL 语句 ';
$strShowingRecords = '显示记录 ';
$strSingly = '(只排序现时之记录)';
$strSize = '大小';
$strSort = '排序';
$strSpaceUsage = '已使用空间';
$strSplitWordsWithSpace = '每组文字以空格 (" ") 分隔.';
$strSQL = 'SQL'; // should express in english
$strSQLResult = 'SQL 查询结果';
$strStatement = '叙述';
$strStrucCSV = 'CSV 数据';
$strStrucData = '结构和数据';
$strStrucDrop = '添加 \'drop table\'';
$strStrucExcelCSV = 'Ms Excel 的 CSV 格式';
$strStrucOnly = '只选择结构';
$strStructPropose = '分析数据表结构';
$strStructure = '结构';
$strSubmit = '发送';
$strSuccess = '你运行的 SQL 语句已经成功运行了。';
$strSum = '总计';

$strTable = '数据表 ';
$strTableComments = '数据表注解文字';
$strTableEmpty = '数据表名称是空的!';
$strTableHasBeenDropped = '数据表 %s 已被删除';
$strTableHasBeenEmptied = '数据表 %s 已被清空';
$strTableHasBeenFlushed = '数据表 %s 已被强迫更新';
$strTableMaintenance = '数据表维护';
$strTableStructure = '数据表的结构';
$strTableType = '数据表类型';
$strTables = '%s 数据表';
$strTextAreaLength = ' 由于长度限制<br /> 此栏位不能编辑 ';
$strTheContent = '文件中的内容已经插入到数据表中。';
$strTheContents = '文件中的内容将会取代 所选定的数据表中具有 相同的主键或唯一键的 记录。';
$strTheTerminator = '这些字段的结束符';
$strTotal = '总计';
$strType = '类型';

$strUncheckAll = '全部取消';
$strUnique = '唯一';
$strUnselectAll = '全部取消';
$strUpdatePrivMessage = '您已经更新了 %s 的权限.';
$strUpdateProfile = '更新资料:';
$strUpdateProfileMessage = '资料己经更新.';
$strUpdateQuery = '更新语句';
$strUsage = '使用';
$strUseBackquotes = '请在数据表及栏位使用引号';
$strUseTables = '使用数据表';
$strUser = '使用者';
$strUserEmpty = '使用者名称是空的!';
$strUserName = '使用者名称';
$strUsers = '使用者';

$strValue = '值';
$strViewDump = '查看数据表的结构和摘要信息。';
$strViewDumpDB = '查看数据库的结构和摘要信息。';

$strWelcome = '欢迎使用 %s';
$strWithChecked = '选择的数据表：';
$strWrongUser = '密码错误，访问被拒绝。';

$strYes = '是';

$strZip = '"zipped"';

// To translate
$strRelationNotWorking = 'The additional Features for working with linked Tables have been deactivated. To find out why click %shere%s.';  //to translate
$strAllTableSameWidth = 'display all Tables with same width?';  //to translate
?>
