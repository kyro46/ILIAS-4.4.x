<?php
$BEAUT_PATH = realpath(".")."/Services/COPage/syntax_highlight/php";
if (!isset ($BEAUT_PATH)) return;
require_once("$BEAUT_PATH/Beautifier/HFile.php");
  class HFile_aspvb extends HFile{
   function HFile_aspvb(){
     $this->HFile();	
/*************************************/
// Beautifier Highlighting Configuration File 
// ASP-HTML-VB
/*************************************/
// Flags

$this->nocase            	= "1";
$this->notrim            	= "0";
$this->perl              	= "0";

// Colours

$this->colours        	= array("blue", "purple", "gray", "brown", "blue", "purple");
$this->quotecolour       	= "blue";
$this->blockcommentcolour	= "green";
$this->linecommentcolour 	= "green";

// Indent Strings

$this->indent            	= array("Then", "<TD>", "<td>", "<Td>");
$this->unindent          	= array("End", "Next", "End If", "End Select", "</td>", "</Td>", "</TD>");

// String characters and delimiters

$this->stringchars       	= array("\"");
$this->delimiters        	= array("~", "!", "@", "$", "%", "^", "&", "*", "(", ")", "+", "=", "|", "\\", "{", "}", "[", "]", ":", ";", "\"", "'", "<", ">", " ", ",", "	", ".", "?");
$this->escchar           	= "";

// Comment settings

$this->linecommenton     	= array("REM");
$this->blockcommenton    	= array("<!--");
$this->blockcommentoff   	= array("-->");

// Keywords (keyword mapping to colour number)

$this->keywords          	= array(
			"<A" => "1", 
			"</A>" => "1", 
			"<ABBR>" => "1", 
			"<ABBR" => "1", 
			"</ABBR>" => "1", 
			"<ABOVE>" => "1", 
			"<ACRONYM>" => "1", 
			"<ACRONYM" => "1", 
			"</ACRONYM>" => "1", 
			"<ADDRESS>" => "1", 
			"<ADDRESS" => "1", 
			"</ADDRESS>" => "1", 
			"<APPLET" => "1", 
			"</APPLET>" => "1", 
			"<ARRAY>" => "1", 
			"<AREA" => "1", 
			"</AREA" => "1", 
			"<B>" => "1", 
			"<B" => "1", 
			"</B>" => "1", 
			"<BASE" => "1", 
			"<BASEFONT" => "1", 
			"<BDO>" => "1", 
			"<BDO" => "1", 
			"</BDO>" => "1", 
			"<BGSOUND" => "1", 
			"<BIG>" => "1", 
			"<BIG" => "1", 
			"</BIG>" => "1", 
			"<BLINK>" => "1", 
			"</BLINK>" => "1", 
			"<BLOCKQUOTE>" => "1", 
			"<BLOCKQUOTE" => "1", 
			"</BLOCKQUOTE>" => "1", 
			"<BODY" => "1", 
			"<BODY>" => "1", 
			"</BODY>" => "1", 
			"<BOX>" => "1", 
			"<BR" => "1", 
			"<BR>" => "1", 
			"<BLINK" => "1", 
			"<BUTTON>" => "1", 
			"</BUTTON>" => "1", 
			"<CAPTION>" => "1", 
			"<CAPTION" => "1", 
			"</CAPTION>" => "1", 
			"<CENTER>" => "1", 
			"<CENTER" => "1", 
			"</CENTER>" => "1", 
			"<CITE>" => "1", 
			"<CITE" => "1", 
			"</CITE>" => "1", 
			"<CODE>" => "1", 
			"<CODE" => "1", 
			"</CODE>" => "1", 
			"<COL>" => "1", 
			"</COL>" => "1", 
			"<COLGROUP>" => "1", 
			"</COLGROUP>" => "1", 
			"<COMMENT>" => "1", 
			"</COMMENT>" => "1", 
			"<DD>" => "1", 
			"<DD" => "1", 
			"</DD>" => "1", 
			"<DEL>" => "1", 
			"<DEL" => "1", 
			"</DEL>" => "1", 
			"<DFN>" => "1", 
			"<DFN" => "1", 
			"</DFN>" => "1", 
			"<DIR>" => "1", 
			"<DIR" => "1", 
			"</DIR>" => "1", 
			"<DIV>" => "1", 
			"<DIV" => "1", 
			"</DIV>" => "1", 
			"<DL>" => "1", 
			"<DL" => "1", 
			"</DL>" => "1", 
			"<DT>" => "1", 
			"<DT" => "1", 
			"</DT>" => "1", 
			"<EM>" => "1", 
			"<EM" => "1", 
			"</EM>" => "1", 
			"<EMBED" => "1", 
			"<FIELDSET>" => "1", 
			"<FIELDSET" => "1", 
			"</FIELDSET>" => "1", 
			"<FIG>" => "1", 
			"<FONT" => "1", 
			"</FONT>" => "1", 
			"<FORM>" => "1", 
			"<FORM" => "1", 
			"</FORM>" => "1", 
			"<FRAME" => "1", 
			"<FRAMESET" => "1", 
			"</FRAMESET>" => "1", 
			"<H1>" => "1", 
			"<H1" => "1", 
			"</H1>" => "1", 
			"<H2>" => "1", 
			"<H2" => "1", 
			"</H2>" => "1", 
			"<H3>" => "1", 
			"<H3" => "1", 
			"</H3>" => "1", 
			"<H4>" => "1", 
			"<H4" => "1", 
			"</H4>" => "1", 
			"<H5>" => "1", 
			"<H5" => "1", 
			"</H5>" => "1", 
			"<H6>" => "1", 
			"<H6" => "1", 
			"</H6>" => "1", 
			"<HEAD>" => "1", 
			"<HEAD" => "1", 
			"</HEAD>" => "1", 
			"<HR>" => "1", 
			"<HR" => "1", 
			"<HTML>" => "1", 
			"<HTML" => "1", 
			"</HTML>" => "1", 
			"<I>" => "1", 
			"<I" => "1", 
			"</I>" => "1", 
			"<IFRAME>" => "1", 
			"</IFRAME>" => "1", 
			"<ILAYER>" => "1", 
			"</ILAYER>" => "1", 
			"<IMG" => "1", 
			"<INPUT>" => "1", 
			"<INPUT" => "1", 
			"<INS>" => "1", 
			"<INS" => "1", 
			"</INS>" => "1", 
			"<ISINDEX>" => "1", 
			"<ISINDEX" => "1", 
			"<KBD>" => "1", 
			"<KBD" => "1", 
			"</KBD>" => "1", 
			"<LABEL>" => "1", 
			"<LABEL" => "1", 
			"</LABEL>" => "1", 
			"<LAYER>" => "1", 
			"<LEGEND>" => "1", 
			"<LEGEND" => "1", 
			"</LEGEND>" => "1", 
			"<LI>" => "1", 
			"<LI" => "1", 
			"</LI>" => "1", 
			"<LINK" => "1", 
			"<LISTING>" => "1", 
			"</LISTING>" => "1", 
			"<MAP" => "1", 
			"</MAP>" => "1", 
			"<MARQUEE" => "1", 
			"</MARQUEE>" => "1", 
			"<MENU>" => "1", 
			"<MENU" => "1", 
			"</MENU>" => "1", 
			"<META" => "1", 
			"<MULTICOL>" => "1", 
			"</MULTICOL>" => "1", 
			"<NEXTID" => "1", 
			"<NOBR>" => "1", 
			"</NOBR>" => "1", 
			"<NOFRAMES>" => "1", 
			"</NOFRAMES>" => "1", 
			"<NOLAYER>" => "1", 
			"</NOLAYER>" => "1", 
			"<NOTE>" => "1", 
			"</NOTE>" => "1", 
			"<NOSCRIPT>" => "1", 
			"</NOSCRIPT>" => "1", 
			"<OBJECT>" => "1", 
			"<OBJECT" => "1", 
			"<OL>" => "1", 
			"<OL" => "1", 
			"</OL>" => "1", 
			"<OPTION>" => "1", 
			"<OPTION" => "1", 
			"</OPTION>" => "1", 
			"<OPTGROUP>" => "1", 
			"<OPTGROUP" => "1", 
			"</OPTGROUP>" => "1", 
			"<P" => "1", 
			"<P>" => "1", 
			"</P>" => "1", 
			"<PARAM" => "1", 
			"<PRE>" => "1", 
			"<PRE" => "1", 
			"</PRE>" => "1", 
			"<Q>" => "1", 
			"<Q" => "1", 
			"</Q>" => "1", 
			"<QUOTE>" => "1", 
			"<RANGE>" => "1", 
			"<ROOT>" => "1", 
			"<S>" => "1", 
			"<S" => "1", 
			"</S>" => "1", 
			"<SAMP>" => "1", 
			"<SAMP" => "1", 
			"</SAMP>" => "1", 
			"<SCRIPT" => "1", 
			"<SCRIPT>" => "1", 
			"</SCRIPT>" => "1", 
			"<SELECT" => "1", 
			"</SELECT>" => "1", 
			"<SMALL>" => "1", 
			"<SMALL" => "1", 
			"</SMALL>" => "1", 
			"<SOUND" => "1", 
			"<SPACER>" => "1", 
			"<SPAN>" => "1", 
			"<SPAN" => "1", 
			"</SPAN>" => "1", 
			"<SQRT>" => "1", 
			"<STRIKE>" => "1", 
			"<STRIKE" => "1", 
			"</STRIKE>" => "1", 
			"<STRONG>" => "1", 
			"<STRONG" => "1", 
			"</STRONG>" => "1", 
			"<STYLE>" => "1", 
			"<STYLE" => "1", 
			"</STYLE>" => "1", 
			"<SUB>" => "1", 
			"<SUB" => "1", 
			"</SUB>" => "1", 
			"<SUP>" => "1", 
			"<SUP" => "1", 
			"</SUP>" => "1", 
			"<TABLE>" => "1", 
			"<TABLE" => "1", 
			"</TABLE>" => "1", 
			"<TBODY>" => "1", 
			"<TBODY" => "1", 
			"</TBODY>" => "1", 
			"<TD" => "1", 
			"<TD>" => "1", 
			"</TD>" => "1", 
			"<TEXT>" => "1", 
			"<TEXTAREA" => "1", 
			"<TEXTAREA>" => "1", 
			"</TEXTAREA>" => "1", 
			"<TFOOT>" => "1", 
			"<TFOOT" => "1", 
			"</TFOOT>" => "1", 
			"<TH" => "1", 
			"<TH>" => "1", 
			"</TH>" => "1", 
			"<THEAD>" => "1", 
			"<THEAD" => "1", 
			"</THEAD>" => "1", 
			"<TITLE>" => "1", 
			"</TITLE>" => "1", 
			"<TR" => "1", 
			"<TR>" => "1", 
			"</TR>" => "1", 
			"<TT>" => "1", 
			"</TT>" => "1", 
			"<TT" => "1", 
			"<U>" => "1", 
			"<U" => "1", 
			"</U>" => "1", 
			"<UL>" => "1", 
			"<UL" => "1", 
			"</UL>" => "1", 
			"<VAR>" => "1", 
			"</VAR>" => "1", 
			"<VAR" => "1", 
			"<WBR>" => "1", 
			"<XMP>" => "1", 
			"</XMP>" => "1", 
			"ABBR=" => "2", 
			"ACCEPT-CHARSET=" => "2", 
			"ACCEPT=" => "2", 
			"ACCESSKEY=" => "2", 
			"ACTION=" => "2", 
			"ALIGN=" => "2", 
			"ALINK=" => "2", 
			"ALT=" => "2", 
			"ARCHIVE=" => "2", 
			"AXIS=" => "2", 
			"BACKGROUND=" => "2", 
			"BEHAVIOR" => "2", 
			"BELOW" => "2", 
			"BGCOLOR=" => "2", 
			"BORDER=" => "2", 
			"CELLPADDING=" => "2", 
			"CELLSPACING=" => "2", 
			"CHAR=" => "2", 
			"CHAROFF=" => "2", 
			"CHARSET=" => "2", 
			"CHECKED" => "2", 
			"CITE=" => "2", 
			"CLASS=" => "2", 
			"CLASSID=" => "2", 
			"CLEAR=" => "2", 
			"CODE=" => "2", 
			"CODEBASE=" => "2", 
			"CODETYPE=" => "2", 
			"COLOR=" => "2", 
			"COLS=" => "2", 
			"COLSPAN=" => "2", 
			"COMPACT" => "2", 
			"CONTENT=" => "2", 
			"COORDS=" => "2", 
			"DATA=" => "2", 
			"DATETIME=" => "2", 
			"DECLARE" => "2", 
			"DEFER" => "2", 
			"DIR=" => "2", 
			"DISABLED" => "2", 
			"ENCTYPE=" => "2", 
			"FACE=" => "2", 
			"FOR=" => "2", 
			"FRAME=" => "2", 
			"FRAMEBORDER=" => "2", 
			"FRAMESPACING=" => "2", 
			"HEADERS=" => "2", 
			"HEIGHT=" => "2", 
			"HIDDEN=" => "2", 
			"HREF=" => "2", 
			"HREFLANG=" => "2", 
			"HSPACE=" => "2", 
			"HTTP-EQUIV=" => "2", 
			"ID=" => "2", 
			"ISMAP=" => "2", 
			"LABEL=" => "2", 
			"LANG=" => "2", 
			"LANGUAGE=" => "2", 
			"LINK=" => "2", 
			"LOOP=" => "2", 
			"LONGDESC=" => "2", 
			"MAILTO=" => "2", 
			"MARGINHEIGHT=" => "2", 
			"MARGINWIDTH=" => "2", 
			"MAXLENGTH=" => "2", 
			"MEDIA=" => "2", 
			"METHOD=" => "2", 
			"MULTIPLE" => "2", 
			"NAME=" => "2", 
			"NOHREF" => "2", 
			"NORESIZE" => "2", 
			"NOSHADE" => "2", 
			"OBJECT=" => "2", 
			"ONBLUR=" => "2", 
			"ONCHANGE=" => "2", 
			"ONFOCUS=" => "2", 
			"ONKEYDOWN=" => "2", 
			"ONKEYPRESS=" => "2", 
			"ONKEYUP=" => "2", 
			"ONLOAD=" => "2", 
			"ONRESET=" => "2", 
			"ONSELECT=" => "2", 
			"ONSUBMIT=" => "2", 
			"ONUNLOAD=" => "2", 
			"ONCLICK=" => "2", 
			"ONDBLCLICK=" => "2", 
			"ONMOUSEDOWN=" => "2", 
			"ONMOUSEMOVE=" => "2", 
			"ONMOUSEOUT=" => "2", 
			"ONMOUSEOVER=" => "2", 
			"ONMOUSEUP=" => "2", 
			"PROFILE=" => "2", 
			"PROMPT=" => "2", 
			"READONLY" => "2", 
			"REL=" => "2", 
			"REV=" => "2", 
			"ROWS=" => "2", 
			"ROWSPAN=" => "2", 
			"RULES=" => "2", 
			"SCHEME=" => "2", 
			"SCOPE=" => "2", 
			"SCROLLING=" => "2", 
			"SELECTED" => "2", 
			"SHAPE=" => "2", 
			"SIZE=" => "2", 
			"SPAN=" => "2", 
			"SRC=" => "2", 
			"STANDBY=" => "2", 
			"START=" => "2", 
			"STYLE=" => "2", 
			"SUMMARY=" => "2", 
			"TABINDEX=" => "2", 
			"TARGET=" => "2", 
			"TEXT=" => "2", 
			"TITLE=" => "2", 
			"TOPMARGIN=" => "2", 
			"TYPE=" => "2", 
			"URL=" => "2", 
			"USEMAP=" => "2", 
			"VALIGN=" => "2", 
			"VALUE=" => "2", 
			"VALUETYPE=" => "2", 
			"VERSION=" => "2", 
			"VLINK=" => "2", 
			"VSPACE=" => "2", 
			"WIDTH=" => "2", 
			"=" => "2", 
			"Abs" => "3", 
			"Array" => "3", 
			"Asc" => "3", 
			"AscB" => "3", 
			"AscW" => "3", 
			"Atn" => "3", 
			"Avg" => "3", 
			"CBool" => "3", 
			"CByte" => "3", 
			"CCur" => "3", 
			"CDate" => "3", 
			"CDbl" => "3", 
			"Cdec" => "3", 
			"Choose" => "3", 
			"Chr" => "3", 
			"ChrB" => "3", 
			"ChrW" => "3", 
			"CInt" => "3", 
			"CLng" => "3", 
			"Command" => "3", 
			"Cos" => "3", 
			"Count" => "3", 
			"CreateObject" => "3", 
			"CSng" => "3", 
			"CStr" => "3", 
			"CurDir" => "3", 
			"CVar" => "3", 
			"CVDate" => "3", 
			"CVErr" => "3", 
			"Date" => "3", 
			"DateAdd" => "3", 
			"DateDiff" => "3", 
			"DatePart" => "3", 
			"DateSerial" => "3", 
			"DateValue" => "3", 
			"Day" => "3", 
			"DDB" => "3", 
			"Dir" => "3", 
			"DoEvents" => "3", 
			"Environ" => "3", 
			"EOF" => "3", 
			"Error" => "3", 
			"Exp" => "3", 
			"FileAttr" => "3", 
			"FileDateTime" => "3", 
			"FileLen" => "3", 
			"Fix" => "3", 
			"Format" => "3", 
			"FreeFile" => "3", 
			"FV" => "3", 
			"GetAllStrings" => "3", 
			"GetAttr" => "3", 
			"GetAutoServerSettings" => "3", 
			"GetObject" => "3", 
			"GetSetting" => "3", 
			"Hex" => "3", 
			"Hour" => "3", 
			"IIf" => "3", 
			"IMEStatus" => "3", 
			"Input" => "3", 
			"InputB" => "3", 
			"InputBox" => "3", 
			"InStr" => "3", 
			"InstB" => "3", 
			"Int" => "3", 
			"IPmt" => "3", 
			"IsArray" => "3", 
			"IsDate" => "3", 
			"IsEmpty" => "3", 
			"IsError" => "3", 
			"IsMissing" => "3", 
			"IsNull" => "3", 
			"IsNumeric" => "3", 
			"IsObject" => "3", 
			"LBound" => "3", 
			"LCase" => "3", 
			"Left" => "3", 
			"LeftB" => "3", 
			"Len" => "3", 
			"LenB" => "3", 
			"LoadPicture" => "3", 
			"Loc" => "3", 
			"LOF" => "3", 
			"Log" => "3", 
			"LTrim" => "3", 
			"Max" => "3", 
			"Mid" => "3", 
			"MidB" => "3", 
			"Min" => "3", 
			"Minute" => "3", 
			"MIRR" => "3", 
			"Month" => "3", 
			"MsgBox" => "3", 
			"Now" => "3", 
			"NPer" => "3", 
			"NPV" => "3", 
			"Oct" => "3", 
			"Partition" => "3", 
			"Pmt" => "3", 
			"PPmt" => "3", 
			"PV" => "3", 
			"QBColor" => "3", 
			"Rate" => "3", 
			"RGB" => "3", 
			"Right" => "3", 
			"RightB" => "3", 
			"Rnd" => "3", 
			"RTrim" => "3", 
			"Second" => "3", 
			"Seek" => "3", 
			"Sgn" => "3", 
			"Shell" => "3", 
			"Sin" => "3", 
			"SLN" => "3", 
			"Space" => "3", 
			"Spc" => "3", 
			"Sqr" => "3", 
			"StDev" => "3", 
			"StDevP" => "3", 
			"Str" => "3", 
			"StrComp" => "3", 
			"StrConv" => "3", 
			"String" => "3", 
			"Switch" => "3", 
			"Sum" => "3", 
			"SYD" => "3", 
			"Tab" => "3", 
			"Tan" => "3", 
			"Time" => "3", 
			"Timer" => "3", 
			"TimeSerial" => "3", 
			"TimeValue" => "3", 
			"Trim" => "3", 
			"TypeName" => "3", 
			"UBound" => "3", 
			"UCase" => "3", 
			"Val" => "3", 
			"Var" => "3", 
			"VarP" => "3", 
			"VarType" => "3", 
			"Weekday" => "3", 
			"Year" => "3", 
			"Accept" => "4", 
			"Activate" => "4", 
			"Add" => "4", 
			"AddCustom" => "4", 
			"AddFile" => "4", 
			"AddFromFile" => "4", 
			"AddFromTemplate" => "4", 
			"AddItem" => "4", 
			"AddNew" => "4", 
			"AddToAddInToolbar" => "4", 
			"AddToolboxProgID" => "4", 
			"Append" => "4", 
			"AppendChunk" => "4", 
			"Arrange" => "4", 
			"Assert" => "4", 
			"AsyncRead" => "4", 
			"BatchUpdate" => "4", 
			"BeginTrans" => "4", 
			"Bind" => "4", 
			"Cancel" => "4", 
			"CancelAsyncRead" => "4", 
			"CancelBatch" => "4", 
			"CancelUpdate" => "4", 
			"CanPropertyChange" => "4", 
			"CaptureImage" => "4", 
			"CellText" => "4", 
			"CellValue" => "4", 
			"Circle" => "4", 
			"Clear" => "4", 
			"ClearFields" => "4", 
			"ClearSel" => "4", 
			"ClearSelCols" => "4", 
			"Clone" => "4", 
			"Close" => "4", 
			"Cls" => "4", 
			"ColContaining" => "4", 
			"ColumnSize" => "4", 
			"CommitTrans" => "4", 
			"CompactDatabase" => "4", 
			"Compose" => "4", 
			"Connect" => "4", 
			"Copy" => "4", 
			"CopyQueryDef" => "4", 
			"CreateDatabase" => "4", 
			"CreateDragImage" => "4", 
			"CreateEmbed" => "4", 
			"CreateField" => "4", 
			"CreateGroup" => "4", 
			"CreateIndex" => "4", 
			"CreateLink" => "4", 
			"CreatePreparedStatement" => "4", 
			"CreatePropery" => "4", 
			"CreateQuery" => "4", 
			"CreateQueryDef" => "4", 
			"CreateRelation" => "4", 
			"CreateTableDef" => "4", 
			"CreateUser" => "4", 
			"CreateWorkspace" => "4", 
			"Customize" => "4", 
			"Delete" => "4", 
			"DeleteColumnLabels" => "4", 
			"DeleteColumns" => "4", 
			"DeleteRowLabels" => "4", 
			"DeleteRows" => "4", 
			"DoVerb" => "4", 
			"Drag" => "4", 
			"Draw" => "4", 
			"Edit" => "4", 
			"EditCopy" => "4", 
			"EditPaste" => "4", 
			"EndDoc" => "4", 
			"EnsureVisible" => "4", 
			"EstablishConnection" => "4", 
			"Execute" => "4", 
			"ExtractIcon" => "4", 
			"Fetch" => "4", 
			"FetchVerbs" => "4", 
			"Files" => "4", 
			"FillCache" => "4", 
			"Find" => "4", 
			"FindFirst" => "4", 
			"FindItem" => "4", 
			"FindLast" => "4", 
			"FindNext" => "4", 
			"FindPrevious" => "4", 
			"Forward" => "4", 
			"GetBookmark" => "4", 
			"GetChunk" => "4", 
			"GetClipString" => "4", 
			"GetData" => "4", 
			"GetFirstVisible" => "4", 
			"GetFormat" => "4", 
			"GetHeader" => "4", 
			"GetLineFromChar" => "4", 
			"GetNumTicks" => "4", 
			"GetRows" => "4", 
			"GetSelectedPart" => "4", 
			"GetText" => "4", 
			"GetVisibleCount" => "4", 
			"GoBack" => "4", 
			"GoForward" => "4", 
			"Hide" => "4", 
			"HitTest" => "4", 
			"HoldFields" => "4", 
			"Idle" => "4", 
			"InitializeLabels" => "4", 
			"InsertColumnLabels" => "4", 
			"InsertColumns" => "4", 
			"InsertObjDlg" => "4", 
			"InsertRowLabels" => "4", 
			"InsertRows" => "4", 
			"Item" => "4", 
			"KillDoc" => "4", 
			"Layout" => "4", 
			"Line" => "4", 
			"LinkExecute" => "4", 
			"LinkPoke" => "4", 
			"LinkRequest" => "4", 
			"LinkSend" => "4", 
			"Listen" => "4", 
			"LoadFile" => "4", 
			"LoadResData" => "4", 
			"LoadResPicture" => "4", 
			"LoadResString" => "4", 
			"LogEvent" => "4", 
			"MakeCompileFile" => "4", 
			"MakeReplica" => "4", 
			"MoreResults" => "4", 
			"Move" => "4", 
			"MoveData" => "4", 
			"MoveFirst" => "4", 
			"MoveLast" => "4", 
			"MoveNext" => "4", 
			"MovePrevious" => "4", 
			"NavigateTo" => "4", 
			"NewPage" => "4", 
			"NewPassword" => "4", 
			"NextRecordset" => "4", 
			"OLEDrag" => "4", 
			"OnAddinsUpdate" => "4", 
			"OnConnection" => "4", 
			"OnDisconnection" => "4", 
			"OnStartupComplete" => "4", 
			"Open" => "4", 
			"OpenConnection" => "4", 
			"OpenDatabase" => "4", 
			"OpenQueryDef" => "4", 
			"OpenRecordset" => "4", 
			"OpenResultset" => "4", 
			"OpenURL" => "4", 
			"Overlay" => "4", 
			"PaintPicture" => "4", 
			"Paste" => "4", 
			"PastSpecialDlg" => "4", 
			"PeekData" => "4", 
			"Play" => "4", 
			"Point" => "4", 
			"PopulatePartial" => "4", 
			"PopupMenu" => "4", 
			"Print" => "4", 
			"PrintForm" => "4", 
			"PropertyChanged" => "4", 
			"PSet" => "4", 
			"Quit" => "4", 
			"Raise" => "4", 
			"RandomDataFill" => "4", 
			"RandomFillColumns" => "4", 
			"RandomFillRows" => "4", 
			"rdoCreateEnvironment" => "4", 
			"rdoRegisterDataSource" => "4", 
			"ReadFromFile" => "4", 
			"ReadProperty" => "4", 
			"Rebind" => "4", 
			"ReFill" => "4", 
			"Refresh" => "4", 
			"RefreshLink" => "4", 
			"RegisterDatabase" => "4", 
			"Reload" => "4", 
			"Remove" => "4", 
			"RemoveAddInFromToolbar" => "4", 
			"RemoveItem" => "4", 
			"Render" => "4", 
			"RepairDatabase" => "4", 
			"Reply" => "4", 
			"ReplyAll" => "4", 
			"Requery" => "4", 
			"ResetCustom" => "4", 
			"ResetCustomLabel" => "4", 
			"ResolveName" => "4", 
			"RestoreToolbar" => "4", 
			"Resync" => "4", 
			"Rollback" => "4", 
			"RollbackTrans" => "4", 
			"RowBookmark" => "4", 
			"RowContaining" => "4", 
			"RowTop" => "4", 
			"Save" => "4", 
			"SaveAs" => "4", 
			"SaveFile" => "4", 
			"SaveToFile" => "4", 
			"SaveToolbar" => "4", 
			"SaveToOle1File" => "4", 
			"Scale" => "4", 
			"ScaleX" => "4", 
			"ScaleY" => "4", 
			"Scroll" => "4", 
			"Select" => "4", 
			"SelectAll" => "4", 
			"SelectPart" => "4", 
			"SelPrint" => "4", 
			"Send" => "4", 
			"SendData" => "4", 
			"Set" => "4", 
			"SetAutoServerSettings" => "4", 
			"SetData" => "4", 
			"SetFocus" => "4", 
			"SetOption" => "4", 
			"SetSize" => "4", 
			"SetText" => "4", 
			"SetViewport" => "4", 
			"Show" => "4", 
			"ShowColor" => "4", 
			"ShowFont" => "4", 
			"ShowHelp" => "4", 
			"ShowOpen" => "4", 
			"ShowPrinter" => "4", 
			"ShowSave" => "4", 
			"ShowWhatsThis" => "4", 
			"SignOff" => "4", 
			"SignOn" => "4", 
			"Size" => "4", 
			"Span" => "4", 
			"SplitContaining" => "4", 
			"StartLabelEdit" => "4", 
			"StartLogging" => "4", 
			"Stop" => "4", 
			"Synchronize" => "4", 
			"TextHeight" => "4", 
			"TextWidth" => "4", 
			"ToDefaults" => "4", 
			"TwipsToChartPart" => "4", 
			"TypeByChartType" => "4", 
			"Update" => "4", 
			"UpdateControls" => "4", 
			"UpdateRecord" => "4", 
			"UpdateRow" => "4", 
			"Upto" => "4", 
			"WhatsThisMode" => "4", 
			"WriteProperty" => "4", 
			"ZOrder" => "4", 
			"AccessKeyPress" => "5", 
			"AfterAddFile" => "5", 
			"AfterChangeFileName" => "5", 
			"AfterCloseFile" => "5", 
			"AfterColEdit" => "5", 
			"AfterColUpdate" => "5", 
			"AfterDelete" => "5", 
			"AfterInsert" => "5", 
			"AfterLabelEdit" => "5", 
			"AfterRemoveFile" => "5", 
			"AfterUpdate" => "5", 
			"AfterWriteFile" => "5", 
			"AmbienChanged" => "5", 
			"ApplyChanges" => "5", 
			"Associate" => "5", 
			"AsyncReadComplete" => "5", 
			"AxisActivated" => "5", 
			"AxisLabelActivated" => "5", 
			"AxisLabelSelected" => "5", 
			"AxisLabelUpdated" => "5", 
			"AxisSelected" => "5", 
			"AxisTitleActivated" => "5", 
			"AxisTitleSelected" => "5", 
			"AxisTitleUpdated" => "5", 
			"AxisUpdated" => "5", 
			"BeforeClick" => "5", 
			"BeforeColEdit" => "5", 
			"BeforeColUpdate" => "5", 
			"BeforeConnect" => "5", 
			"BeforeDelete" => "5", 
			"BeforeInsert" => "5", 
			"BeforeLabelEdit" => "5", 
			"BeforeLoadFile" => "5", 
			"BeforeUpdate" => "5", 
			"ButtonClick" => "5", 
			"ButtonCompleted" => "5", 
			"ButtonGotFocus" => "5", 
			"ButtonLostFocus" => "5", 
			"Change" => "5", 
			"ChartActivated" => "5", 
			"ChartSelected" => "5", 
			"ChartUpdated" => "5", 
			"Click" => "5", 
			"ColEdit" => "5", 
			"Collapse" => "5", 
			"ColResize" => "5", 
			"ColumnClick" => "5", 
			"Compare" => "5", 
			"ConfigChageCancelled" => "5", 
			"ConfigChanged" => "5", 
			"ConnectionRequest" => "5", 
			"DataArrival" => "5", 
			"DataChanged" => "5", 
			"DataUpdated" => "5", 
			"DblClick" => "5", 
			"Deactivate" => "5", 
			"DeviceArrival" => "5", 
			"DeviceOtherEvent" => "5", 
			"DeviceQueryRemove" => "5", 
			"DeviceQueryRemoveFailed" => "5", 
			"DeviceRemoveComplete" => "5", 
			"DeviceRemovePending" => "5", 
			"DevModeChange" => "5", 
			"Disconnect" => "5", 
			"DisplayChanged" => "5", 
			"Dissociate" => "5", 
			"DoGetNewFileName" => "5", 
			"Done" => "5", 
			"DonePainting" => "5", 
			"DownClick" => "5", 
			"DragDrop" => "5", 
			"DragOver" => "5", 
			"DropDown" => "5", 
			"EditProperty" => "5", 
			"EnterCell" => "5", 
			"EnterFocus" => "5", 
			"ExitFocus" => "5", 
			"Expand" => "5", 
			"FootnoteActivated" => "5", 
			"FootnoteSelected" => "5", 
			"FootnoteUpdated" => "5", 
			"GotFocus" => "5", 
			"HeadClick" => "5", 
			"InfoMessage" => "5", 
			"Initialize" => "5", 
			"IniProperties" => "5", 
			"ItemActivated" => "5", 
			"ItemAdded" => "5", 
			"ItemCheck" => "5", 
			"ItemClick" => "5", 
			"ItemReloaded" => "5", 
			"ItemRemoved" => "5", 
			"ItemRenamed" => "5", 
			"ItemSeletected" => "5", 
			"KeyDown" => "5", 
			"KeyPress" => "5", 
			"KeyUp" => "5", 
			"LeaveCell" => "5", 
			"LegendActivated" => "5", 
			"LegendSelected" => "5", 
			"LegendUpdated" => "5", 
			"LinkClose" => "5", 
			"LinkError" => "5", 
			"LinkNotify" => "5", 
			"LinkOpen" => "5", 
			"Load" => "5", 
			"LostFocus" => "5", 
			"MouseDown" => "5", 
			"MouseMove" => "5", 
			"MouseUp" => "5", 
			"NodeClick" => "5", 
			"ObjectMove" => "5", 
			"OLECompleteDrag" => "5", 
			"OLEDragDrop" => "5", 
			"OLEDragOver" => "5", 
			"OLEGiveFeedback" => "5", 
			"OLESetData" => "5", 
			"OLEStartDrag" => "5", 
			"OnAddNew" => "5", 
			"OnComm" => "5", 
			"Paint" => "5", 
			"PanelClick" => "5", 
			"PanelDblClick" => "5", 
			"PathChange" => "5", 
			"PatternChange" => "5", 
			"PlotActivated" => "5", 
			"PlotSelected" => "5", 
			"PlotUpdated" => "5", 
			"PointActivated" => "5", 
			"PointLabelActivated" => "5", 
			"PointLabelSelected" => "5", 
			"PointLabelUpdated" => "5", 
			"PointSelected" => "5", 
			"PointUpdated" => "5", 
			"PowerQuerySuspend" => "5", 
			"PowerResume" => "5", 
			"PowerStatusChanged" => "5", 
			"PowerSuspend" => "5", 
			"QueryChangeConfig" => "5", 
			"QueryComplete" => "5", 
			"QueryCompleted" => "5", 
			"QueryTimeout" => "5", 
			"QueryUnload" => "5", 
			"ReadProperties" => "5", 
			"Reposition" => "5", 
			"RequestChangeFileName" => "5", 
			"RequestWriteFile" => "5", 
			"Resize" => "5", 
			"ResultsChanged" => "5", 
			"RowColChange" => "5", 
			"RowCurrencyChange" => "5", 
			"RowResize" => "5", 
			"RowStatusChanged" => "5", 
			"SelChange" => "5", 
			"SelectionChanged" => "5", 
			"SendComplete" => "5", 
			"SendProgress" => "5", 
			"SeriesActivated" => "5", 
			"SeriesSelected" => "5", 
			"SeriesUpdated" => "5", 
			"SettingChanged" => "5", 
			"SplitChange" => "5", 
			"StateChanged" => "5", 
			"StatusUpdate" => "5", 
			"SysColorsChanged" => "5", 
			"Terminate" => "5", 
			"TimeChanged" => "5", 
			"TitleActivated" => "5", 
			"TitleSelected" => "5", 
			"UnboundAddData" => "5", 
			"UnboundDeleteRow" => "5", 
			"UnboundGetRelativeBookmark" => "5", 
			"UnboundReadData" => "5", 
			"UnboundWriteData" => "5", 
			"Unload" => "5", 
			"UpClick" => "5", 
			"Updated" => "5", 
			"Validate" => "5", 
			"ValidationError" => "5", 
			"WillAssociate" => "5", 
			"WillChangeData" => "5", 
			"WillDissociate" => "5", 
			"WillExecute" => "5", 
			"WillUpdateRows" => "5", 
			"WriteProperties" => "5", 
			"AppActivate" => "6", 
			"Base" => "6", 
			"Beep" => "6", 
			"Call" => "6", 
			"Case" => "6", 
			"ChDir" => "6", 
			"ChDrive" => "6", 
			"Const" => "6", 
			"DefBool" => "6", 
			"DefByte" => "6", 
			"DefCur" => "6", 
			"DefDate" => "6", 
			"DefDbl" => "6", 
			"DefDec" => "6", 
			"DefInt" => "6", 
			"DefLng" => "6", 
			"DefObj" => "6", 
			"DefSng" => "6", 
			"DefStr" => "6", 
			"Deftype" => "6", 
			"DefVar" => "6", 
			"DeleteSetting" => "6", 
			"Dim" => "6", 
			"Do" => "6", 
			"Else" => "6", 
			"ElseIf" => "6", 
			"End" => "6", 
			"Enum" => "6", 
			"Erase" => "6", 
			"Event" => "6", 
			"Exit" => "6", 
			"Explicit" => "6", 
			"FileCopy" => "6", 
			"For" => "6", 
			"ForEach" => "6", 
			"Function" => "6", 
			"Get" => "6", 
			"GoSub" => "6", 
			"GoTo" => "6", 
			"If" => "6", 
			"Implements" => "6", 
			"Kill" => "6", 
			"Let" => "6", 
			"LineInput" => "6", 
			"Lock" => "6", 
			"LSet" => "6", 
			"MkDir" => "6", 
			"Name" => "6", 
			"Next" => "6", 
			"OnError" => "6", 
			"On" => "6", 
			"Option" => "6", 
			"Private" => "6", 
			"Property" => "6", 
			"Public" => "6", 
			"Put" => "6", 
			"RaiseEvent" => "6", 
			"Randomize" => "6", 
			"ReDim" => "6", 
			"Reset" => "6", 
			"Resume" => "6", 
			"Return" => "6", 
			"RmDir" => "6", 
			"RSet" => "6", 
			"SavePicture" => "6", 
			"SaveSetting" => "6", 
			"SendKeys" => "6", 
			"SetAttr" => "6", 
			"Static" => "6", 
			"Sub" => "6", 
			"Then" => "6", 
			"Type" => "6", 
			"Unlock" => "6", 
			"Wend" => "6", 
			"While" => "6", 
			"Width" => "6", 
			"With" => "6", 
			"Write" => "6");

// Special extensions

// Each category can specify a PHP function that returns an altered
// version of the keyword.
        
        

$this->linkscripts    	= array(
			"1" => "donothing", 
			"2" => "donothing", 
			"3" => "donothing", 
			"4" => "donothing", 
			"5" => "donothing", 
			"6" => "donothing");
}


function donothing($keywordin)
{
	return $keywordin;
}

}?>
