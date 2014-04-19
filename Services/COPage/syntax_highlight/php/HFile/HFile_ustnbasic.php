<?php
$BEAUT_PATH = realpath(".")."/Services/COPage/syntax_highlight/php";
if (!isset ($BEAUT_PATH)) return;
require_once("$BEAUT_PATH/Beautifier/HFile.php");
  class HFile_ustnbasic extends HFile{
   function HFile_ustnbasic(){
     $this->HFile();	
/*************************************/
// Beautifier Highlighting Configuration File 
// MicroStation Basic
/*************************************/
// Flags

$this->nocase            	= "1";
$this->notrim            	= "0";
$this->perl              	= "0";

// Colours

$this->colours        	= array("blue", "purple", "gray");
$this->quotecolour       	= "blue";
$this->blockcommentcolour	= "green";
$this->linecommentcolour 	= "green";

// Indent Strings

$this->indent            	= array();
$this->unindent          	= array();

// String characters and delimiters

$this->stringchars       	= array("\"");
$this->delimiters        	= array("~", "!", "@", "^", "&", "*", "(", ")", "-", "+", "=", "|", "\\", "/", "{", "}", "[", "]", ":", ";", "\"", "'", "<", ">", " ", ",", "	", "?");
$this->escchar           	= "";

// Comment settings

$this->linecommenton     	= array("'");
$this->blockcommenton    	= array("");
$this->blockcommentoff   	= array("");

// Keywords (keyword mapping to colour number)

$this->keywords          	= array(
			"&" => "1", 
			"*" => "1", 
			"+" => "1", 
			"-" => "1", 
			"/" => "1", 
			"<" => "1", 
			"<=" => "1", 
			"<>" => "1", 
			"=" => "1", 
			">" => "1", 
			">=" => "1", 
			"Abs" => "1", 
			"AND" => "1", 
			"ArrayDims" => "1", 
			"ArraySort" => "1", 
			"As" => "1", 
			"Asc" => "1", 
			"Atn" => "1", 
			"Basic.Capability%" => "1", 
			"Basic.Eoln$" => "1", 
			"Basic.FreeMemory" => "1", 
			"Basic.OS" => "1", 
			"Basic.PathSeparator$" => "1", 
			"Beep" => "1", 
			"Call" => "1", 
			"Case" => "1", 
			"CDbl" => "1", 
			"Chr$" => "1", 
			"CInt" => "1", 
			"CLng" => "1", 
			"Close" => "1", 
			"Command$" => "1", 
			"Const" => "1", 
			"Cos" => "1", 
			"CSng" => "1", 
			"CStr" => "1", 
			"Date$" => "1", 
			"DateAdd" => "1", 
			"DateDiff" => "1", 
			"DatePart" => "1", 
			"DateSerial" => "1", 
			"DateValue" => "1", 
			"Day" => "1", 
			"DDB" => "1", 
			"DDEExecute" => "1", 
			"DDEInitiate" => "1", 
			"DDEPoke" => "1", 
			"DDERequest" => "1", 
			"DDESend" => "1", 
			"DDETerminate" => "1", 
			"DDETerminateAll" => "1", 
			"DDETimeOut" => "1", 
			"Declare" => "1", 
			"DEF" => "1", 
			"Dim" => "1", 
			"Dir$" => "1", 
			"Do" => "1", 
			"ebArchive" => "1", 
			"ebDirectory" => "1", 
			"ebHidden" => "1", 
			"ebNone" => "1", 
			"ebNormal" => "1", 
			"ebReadOnly" => "1", 
			"ebSystem" => "1", 
			"ebVolume" => "1", 
			"Else" => "1", 
			"ElseIf" => "1", 
			"End" => "1", 
			"EndFunction" => "1", 
			"EndSub" => "1", 
			"Environ$" => "1", 
			"Eof" => "1", 
			"Eqv" => "1", 
			"Erase" => "1", 
			"Erl" => "1", 
			"Err" => "1", 
			"Error" => "1", 
			"Error$" => "1", 
			"Exit" => "1", 
			"ExitDo" => "1", 
			"ExitFor" => "1", 
			"ExitFunction" => "1", 
			"ExitSub" => "1", 
			"Exp" => "1", 
			"FileAttr" => "1", 
			"FileCopy" => "1", 
			"FileDateTime" => "1", 
			"FileDirs" => "1", 
			"FileExists" => "1", 
			"FileLen" => "1", 
			"FileList" => "1", 
			"FileParse$" => "1", 
			"Fix" => "1", 
			"For" => "1", 
			"Format$" => "1", 
			"FreeFile" => "1", 
			"Function" => "1", 
			"Fv" => "1", 
			"Get" => "1", 
			"GetAttr" => "1", 
			"Global" => "1", 
			"GoSub" => "1", 
			"Goto" => "1", 
			"Hex$" => "1", 
			"Hour" => "1", 
			"If" => "1", 
			"IMP" => "1", 
			"Input" => "1", 
			"Input#" => "1", 
			"Input$" => "1", 
			"InStr" => "1", 
			"Int" => "1", 
			"IPmt" => "1", 
			"IRR" => "1", 
			"IS" => "1", 
			"Item$" => "1", 
			"ItemCount" => "1", 
			"Kill" => "1", 
			"LBound" => "1", 
			"LCase$" => "1", 
			"Left$" => "1", 
			"Len" => "1", 
			"Let" => "1", 
			"Like" => "1", 
			"Line$" => "1", 
			"LineCount" => "1", 
			"LineInput#" => "1", 
			"Loc" => "1", 
			"Lock" => "1", 
			"Lof" => "1", 
			"Log" => "1", 
			"Loop" => "1", 
			"LSet" => "1", 
			"LTrim$" => "1", 
			"Main" => "1", 
			"Mid$" => "1", 
			"Minute" => "1", 
			"MIRR" => "1", 
			"MkDir" => "1", 
			"MOD" => "1", 
			"Month" => "1", 
			"Name" => "1", 
			"Next" => "1", 
			"New" => "1", 
			"NOT" => "1", 
			"Now" => "1", 
			"NPer" => "1", 
			"Npv" => "1", 
			"Null" => "1", 
			"Oct$" => "1", 
			"OnError" => "1", 
			"Open" => "1", 
			"OptionBase" => "1", 
			"OptionCompare" => "1", 
			"OR" => "1", 
			"Pmt" => "1", 
			"PPmt" => "1", 
			"Print" => "1", 
			"Print#" => "1", 
			"Private" => "1", 
			"Public" => "1", 
			"Put" => "1", 
			"Pv" => "1", 
			"Random" => "1", 
			"Randomize" => "1", 
			"Rate" => "1", 
			"ReDim" => "1", 
			"REM" => "1", 
			"Reset" => "1", 
			"Resume" => "1", 
			"Return" => "1", 
			"Right$" => "1", 
			"RmDir" => "1", 
			"Rnd" => "1", 
			"RSet" => "1", 
			"RTrim$" => "1", 
			"Second" => "1", 
			"Seek" => "1", 
			"Select" => "1", 
			"Set" => "1", 
			"SetAttr" => "1", 
			"Sgn" => "1", 
			"Sin" => "1", 
			"Sleep" => "1", 
			"Sln" => "1", 
			"Space$" => "1", 
			"Spc" => "1", 
			"Sqr" => "1", 
			"Stop" => "1", 
			"Str$" => "1", 
			"StrComp" => "1", 
			"String$" => "1", 
			"Sub" => "1", 
			"SubSYD" => "1", 
			"Tab" => "1", 
			"Tan" => "1", 
			"Then" => "1", 
			"Time$" => "1", 
			"Timer" => "1", 
			"TimeSerial" => "1", 
			"TimeValue" => "1", 
			"To" => "1", 
			"Trim$" => "1", 
			"Type" => "1", 
			"UBound" => "1", 
			"UCase$" => "1", 
			"UnLock" => "1", 
			"Val" => "1", 
			"Weekday" => "1", 
			"Wend" => "1", 
			"While" => "1", 
			"Width#" => "1", 
			"Word$" => "1", 
			"WordCount" => "1", 
			"Write#" => "1", 
			"XOR" => "1", 
			"Year" => "1", 
			"\\" => "1", 
			"^" => "1", 
			"_" => "1", 
			"GbeMap" => "2", 
			"GbeMap.mslink" => "2", 
			"GbeMap.nameGbeMap.description" => "2", 
			"GbeMap.directory" => "2", 
			"GbeMap.attach" => "2", 
			"GbeMap.detach" => "2", 
			"GbeMap.isAttached" => "2", 
			"GbeMap.categoryMslink" => "2", 
			"GbeMaps" => "2", 
			"GbeMaps.maxMaps" => "2", 
			"GbeMaps.listByMslink" => "2", 
			"GbeMaps.attachByView" => "2", 
			"GbeMaps.indexFromMslink" => "2", 
			"GbeProject" => "2", 
			"GbeProject.DBconnect" => "2", 
			"GbeProject.DBload" => "2", 
			"GbeProject.directory" => "2", 
			"GbeProject.exportFile" => "2", 
			"GbeProject.keyMap" => "2", 
			"GbeProject.loginName" => "2", 
			"GbeProject.mapManager" => "2", 
			"GbeProject.workMap" => "2", 
			"GbeProject.open" => "2", 
			"GbeProject.close" => "2", 
			"MbeAngleFromString" => "2", 
			"MbeCExpressionLong" => "2", 
			"MbeCExpressionDouble" => "2", 
			"MbeCExpressionString" => "2", 
			"MbeCurrentTransform.masterUnits" => "2", 
			"MbeCurrentTransform.dgnUnits" => "2", 
			"MbeCurrentTransform.moveOrigin" => "2", 
			"MbeCurrentTransform.moveOriginWorld" => "2", 
			"MbeCurrentTransform.rotate" => "2", 
			"MbeCurrentTransform.fromView" => "2", 
			"MbeCurrentTransform.scale" => "2", 
			"MbeCurrentTransform.scalarToUors" => "2", 
			"MbeCurrentTransform.scalarFromUors" => "2", 
			"MbeCurrentTransform.pointToUors" => "2", 
			"MbeCurrentTransform.pointFromUors" => "2", 
			"MbeDatabase.name" => "2", 
			"MbeDatabase.activeEntity" => "2", 
			"MbeDatabase.mslink" => "2", 
			"MbeDatabase.errorText" => "2", 
			"MbeDatabase.describe" => "2", 
			"MbeDatabase.connect" => "2", 
			"MbeDatabase.disconnect" => "2", 
			"MbeDatabase.defineActiveEntity" => "2", 
			"MbeDatabase.showActiveEntity" => "2", 
			"MbeDatabase.editActiveEntity" => "2", 
			"MbeDatabase.modeCommit" => "2", 
			"MbeDatabase.modeConfirm" => "2", 
			"MbeDatabase.modeDelete" => "2", 
			"MbeDatabase.modeForms" => "2", 
			"MbeDatabase.modeLinkage" => "2", 
			"MbeDatabase.dAType" => "2", 
			"MbeDatabase.reportOpen" => "2", 
			"MbeDatabase.reportClose" => "2", 
			"MbeDatabaseLink" => "2", 
			"MbeDatabaseLink.dAType" => "2", 
			"MbeDatabaseLink.entityNumber" => "2", 
			"MbeDatabaseLink.isInformation" => "2", 
			"MbeDatabaseLink.isModified" => "2", 
			"MbeDatabaseLink.isRemote" => "2", 
			"MbeDatabaseLink.isUserLink" => "2", 
			"MbeDatabaseLink.linkClass" => "2", 
			"MbeDatabaseLink.linkSize" => "2", 
			"MbeDatabaseLink.linkType" => "2", 
			"MbeDatabaseLink.mslink" => "2", 
			"MbeDatabaseLink.tableName" => "2", 
			"MbeDgnInfo.dgnFileName" => "2", 
			"MbeDgnInfo.dgn3D" => "2", 
			"MbeDgnInfo.dgnFileReadOnly" => "2", 
			"MbeDgnInfo.endOfFile" => "2", 
			"MbeDgnInfo.masterUnitName" => "2", 
			"MbeDgnInfo.subUnitName" => "2", 
			"MbeDgnInfo.uorPerSub" => "2", 
			"MbeDgnInfo.subPerMaster" => "2", 
			"MbeDgnInfo.getGlobalOrigin" => "2", 
			"MbeDgnInfo.graphicGroup" => "2", 
			"MbeDgnInfo.nextGraphicGroup" => "2", 
			"MbeDgnInfo.cellFileName" => "2", 
			"MbeDgnInfo.cell3D" => "2", 
			"MbeDgnInfo.cellFileReadOnly" => "2", 
			"MbeDgnLevels.rootGroup" => "2", 
			"MbeDgnLevels.numGroups" => "2", 
			"MbeDgnLevels.numNamedLevels" => "2", 
			"MbeDgnLevels.getGroup" => "2", 
			"MbeDgnLevels.getLevel" => "2", 
			"MbeDgnLevels.freeGroups" => "2", 
			"MbeDgnLevels.freeLevels" => "2", 
			"MbeDgnLevels.freeAll" => "2", 
			"MbeDgnLevels.loadGroupsFromFile" => "2", 
			"MbeDgnLevels.loadLevelsFromFile" => "2", 
			"MbeDgnLevels.loadAllFromFile" => "2", 
			"MbeDgnLevels.saveGroupsToFile" => "2", 
			"MbeDgnLevels.saveLevelsToFile" => "2", 
			"MbeDgnLevels.saveAllToFile" => "2", 
			"MbeElement.attachActiveEntity" => "2", 
			"MbeElement.reviewDBAttributes" => "2", 
			"MbeElement.reportDBLinkages" => "2", 
			"MbeElement.loadDAttributes" => "2", 
			"MbeElement.foundDBLinkages" => "2", 
			"MbeElement.extractDBLinkages" => "2", 
			"MbeElement.appendDBLinkage" => "2", 
			"MbeElement.deleteDBLinkage" => "2", 
			"MbeElement.firstElement" => "2", 
			"MbeElement.nextElement" => "2", 
			"MbeElement.nextComponent" => "2", 
			"MbeElement.headerElement" => "2", 
			"MbeElement.thisComponent" => "2", 
			"MbeElement.isHeader" => "2", 
			"MbeElement.isComponent" => "2", 
			"MbeElement.isGraphics" => "2", 
			"MbeElement.type" => "2", 
			"MbeElement.fileSize" => "2", 
			"MbeElement.internalSize" => "2", 
			"MbeElement.fromFile" => "2", 
			"MbeElement.fromLocate" => "2", 
			"MbeElement.filePos" => "2", 
			"MbeElement.componentFilePos" => "2", 
			"MbeElement.fileNum" => "2", 
			"MbeElement.changeAll" => "2", 
			"MbeElement.level" => "2", 
			"MbeElement.color" => "2", 
			"MbeElement.style" => "2", 
			"MbeElement.weight" => "2", 
			"MbeElement.class" => "2", 
			"MbeElement.properties" => "2", 
			"MbeElement.getOrigin" => "2", 
			"MbeElement.getPoints" => "2", 
			"MbeElement.setPoints" => "2", 
			"MbeElement.getEndPoints" => "2", 
			"MbeElement.getRange" => "2", 
			"MbeElement.move" => "2", 
			"MbeElement.rotate" => "2", 
			"MbeElement.scale" => "2", 
			"MbeElement.rewrite" => "2", 
			"MbeElement.addToFile" => "2", 
			"MbeElement.display" => "2", 
			"MbeElement.area" => "2", 
			"MbeElement.perimeter" => "2", 
			"MbeElement.volume" => "2", 
			"MbeElement.getCentroid" => "2", 
			"MbeElement.cellName" => "2", 
			"MbeElement.getCellLevels" => "2", 
			"MbeElement.getCellBox" => "2", 
			"MbeElement.getRotation" => "2", 
			"MbeElement.font" => "2", 
			"MbeElement.fontName" => "2", 
			"MbeElement.charHeight" => "2", 
			"MbeElement.charWidth" => "2", 
			"MbeElement.lineSpacing" => "2", 
			"MbeElement.justification" => "2", 
			"MbeElement.getString" => "2", 
			"MbeElement.setString" => "2", 
			"MbeElement.primaryAxis" => "2", 
			"MbeElement.secondaryAxis" => "2", 
			"MbeElement.startAngle" => "2", 
			"MbeElement.sweepAngle" => "2", 
			"MbeElement.topRadius" => "2", 
			"MbeElement.bottomRadius" => "2", 
			"MbeElement.getTopOrigin" => "2", 
			"MbeElement.publish" => "2", 
			"MbeElement.group" => "2", 
			"MbeElement.isTagged" => "2", 
			"MbeElement.tagId" => "2", 
			"MbeElement.numTags" => "2", 
			"MbeElement.extractTags" => "2", 
			"MbeElement.getMbeTag" => "2", 
			"MbeElement.attachTag" => "2", 
			"MbeElement.getNumLinkages" => "2", 
			"MbeElement.extractLinkage" => "2", 
			"MbeElement.appendLinkage" => "2", 
			"MbeElement.deleteLinkage" => "2", 
			"MbeElementSet.fromSelectionSet" => "2", 
			"MbeElementSet.fromFence" => "2", 
			"MbeElementSet.getFirst" => "2", 
			"MbeElementSet.getNext" => "2", 
			"MbeElementSet.clear" => "2", 
			"MbeFileCreate" => "2", 
			"MbeFileOpen" => "2", 
			"MbeFindFile" => "2", 
			"MbeGetConfigVar" => "2", 
			"MbeGetInput" => "2", 
			"MbeGetTagSetNames" => "2", 
			"MbeInputBox" => "2", 
			"MbeLevelGroup" => "2", 
			"MbeLevelGroup.groupName" => "2", 
			"MbeLevelGroup.getLevels" => "2", 
			"MbeLevelGroup.getDescendentLevels" => "2", 
			"MbeLevelGroup.getDescendentGroups" => "2", 
			"MbeLevelGroup.getParentGroup" => "2", 
			"MbeLevelGroup.getLevelMask" => "2", 
			"MbeLevelGroup.deleteGroup" => "2", 
			"MbeLevelGroup.addGroup" => "2", 
			"MbeLevelGroup.addLevel" => "2", 
			"MbeLocateElement" => "2", 
			"MbeMacro.suspend" => "2", 
			"MbeMessageBox" => "2", 
			"MbeNamedLevel" => "2", 
			"MbeNamedLevel.levelNumber" => "2", 
			"MbeNamedLevel.levelName" => "2", 
			"MbeNamedLevel.levelComment" => "2", 
			"MbeNamedLevel.getParentGroup" => "2", 
			"MbeNamedLevel.getLevelMask" => "2", 
			"MbeNamedLevel.deleteLevel" => "2", 
			"MbeNumberOfTagSets" => "2", 
			"MbeOpenModalDialog" => "2", 
			"MbePointFromString" => "2", 
			"MbeRefFile.active" => "2", 
			"MbeRefFile.notFound" => "2", 
			"MbeRefFile.display" => "2", 
			"MbeRefFile.locate" => "2", 
			"MbeRefFile.snap" => "2", 
			"MbeRefFile.plot" => "2", 
			"MbeRefFile.scaleLineStyle" => "2", 
			"MbeRefFile.fileName" => "2", 
			"MbeRefFile.attachName" => "2", 
			"MbeRefFile.logical" => "2", 
			"MbeRefFile.description" => "2", 
			"MbeRefFile.scale" => "2", 
			"MbeRefFile.getLevels" => "2", 
			"MbeRefFile.levelsOn" => "2", 
			"MbeRefFile.levelsOff" => "2", 
			"MbeRefFile.saveSettings" => "2", 
			"MbeRefFiles.maxRefFiles" => "2", 
			"MbeRelocate" => "2", 
			"MbeScalarFromString" => "2", 
			"MbeSelectBox" => "2", 
			"MbeSendAppMessage" => "2", 
			"MbeSendCommand" => "2", 
			"MbeSendDataPoint" => "2", 
			"MbeSendDragPoints" => "2", 
			"MbeSendLastInput" => "2", 
			"MbeSendKeyin" => "2", 
			"MbeSendReset" => "2", 
			"MbeSendTentPoint" => "2", 
			"MbeSession.msProduct" => "2", 
			"MbeSession.msPlatform" => "2", 
			"MbeSession.msVersion" => "2", 
			"MbeSession.language" => "2", 
			"MbeSession.numScreens" => "2", 
			"MbeSession.canSwapScreen" => "2", 
			"MbeSession.elapsedTime" => "2", 
			"MbeSetAppVariable" => "2", 
			"MbeSetScaledAppVar" => "2", 
			"MbeSettings.angle" => "2", 
			"MbeSettings.areaMode" => "2", 
			"MbeSettings.axisAngle" => "2", 
			"MbeSettings.axisOrigin" => "2", 
			"MbeSettings.capMode" => "2", 
			"MbeSettings.cell" => "2", 
			"MbeSettings.class" => "2", 
			"MbeSettings.color" => "2", 
			"MbeSettings.colorName" => "2", 
			"MbeSettings.currentGraphicGroup" => "2", 
			"MbeSettings.fillColor" => "2", 
			"MbeSettings.fillMode" => "2", 
			"MbeSettings.font" => "2", 
			"MbeSettings.fontName" => "2", 
			"MbeSettings.gridReferences" => "2", 
			"MbeSettings.gridUnits" => "2", 
			"MbeSettings.level" => "2", 
			"MbeSettings.lineStyle" => "2", 
			"MbeSettings.lineStyleName" => "2", 
			"MbeSettings.lineTerminator" => "2", 
			"MbeSettings.nodeJustification" => "2", 
			"MbeSettings.patternAngle1" => "2", 
			"MbeSettings.patternAngle2" => "2", 
			"MbeSettings.patternCell" => "2", 
			"MbeSettings.setPatternDelta" => "2", 
			"MbeSettings.getPatternDelta" => "2", 
			"MbeSettings.patternScale" => "2", 
			"MbeSettings.point" => "2", 
			"MbeSettings.setScale" => "2", 
			"MbeSettings.getScale" => "2", 
			"MbeSettings.tagIncrement" => "2", 
			"MbeSettings.terminatorScale" => "2", 
			"MbeSettings.textHeight" => "2", 
			"MbeSettings.textWidth" => "2", 
			"MbeSettings.textLineLength" => "2", 
			"MbeSettings.textLineSpacing" => "2", 
			"MbeSettings.textJustification" => "2", 
			"MbeSettings.weight" => "2", 
			"MbeSettings.associationLock" => "2", 
			"MbeSettings.axisLock" => "2", 
			"MbeSettings.boresiteLock" => "2", 
			"MbeSettings.cellStretchLock" => "2", 
			"MbeSettings.constructionPlaneLock" => "2", 
			"MbeSettings.depthLock" => "2", 
			"MbeSettings.graphGroupLock" => "2", 
			"MbeSettings.gridLock" => "2", 
			"MbeSettings.fenceClip" => "2", 
			"MbeSettings.fenceOverlap" => "2", 
			"MbeSettings.fenceVoid" => "2", 
			"MbeSettings.levelLock" => "2", 
			"MbeSettings.selectionSetLock" => "2", 
			"MbeSettings.snapLock" => "2", 
			"MbeSettings.textNodeLock" => "2", 
			"MbeSettings.settingErr" => "2", 
			"MbeSqlda.numColumns" => "2", 
			"MbeSqlda.column" => "2", 
			"MbeSqlda.value" => "2", 
			"MbeSqlda.type" => "2", 
			"MbeSqlda.length" => "2", 
			"MbeSqlda.isNull" => "2", 
			"MbeSqlda.scale" => "2", 
			"MbeSqlda.precision" => "2", 
			"MbeSqlda.getIndex" => "2", 
			"MbeStartDefaultCommand" => "2", 
			"MbeStartLocate" => "2", 
			"MbeState.inputType" => "2", 
			"MbeState.getInputCommand" => "2", 
			"MbeState.getInputDataPoint" => "2", 
			"MbeState.getInputKeyin" => "2", 
			"MbeState.cmdResult" => "2", 
			"MbeState.errorMessages" => "2", 
			"MbeState.messages" => "2", 
			"MbeState.noElementDisplay" => "2", 
			"MbeState.parseAll" => "2", 
			"MbeState.measureResult1" => "2", 
			"MbeState.measureResult2" => "2", 
			"MbeState.locateTolerance" => "2", 
			"MbeState.locateFileNum" => "2", 
			"MbeState.locateHeaderFilePos" => "2", 
			"MbeState.locateComponentFilePos" => "2", 
			"MbeState.setLocateFileMask" => "2", 
			"MbeState.getLocateFileMask" => "2", 
			"MbeState.setLocateTypeMask" => "2", 
			"MbeState.getLocateTypeMask" => "2", 
			"MbeState.locatePropMask" => "2", 
			"MbeState.locatePropVal" => "2", 
			"MbeState.locateClassMask" => "2", 
			"MbeStringFromScalar" => "2", 
			"MbeStringFromPoint" => "2", 
			"MbeStringFromAngle" => "2", 
			"MbeTable.name" => "2", 
			"MbeTable.criteria" => "2", 
			"MbeTable.largestMslink" => "2", 
			"MbeTable.entityNumber" => "2", 
			"MbeTable.activeReview" => "2", 
			"MbeTable.reportTable" => "2", 
			"MbeTable.fenceFilter" => "2", 
			"MbeTable.describe" => "2", 
			"MbeTable.recordFirst" => "2", 
			"MbeTable.recordLast" => "2", 
			"MbeTable.recordNext" => "2", 
			"MbeTable.recordInsert" => "2", 
			"MbeTable.recordUpdate" => "2", 
			"MbeTable.recordDelete" => "2", 
			"MbeTable.copy" => "2", 
			"MbeTable.create" => "2", 
			"MbeTable.drop" => "2", 
			"MbeTag.setName" => "2", 
			"MbeTag.name" => "2", 
			"MbeTag.fileNum" => "2", 
			"MbeTag.idMbeTag.targetId" => "2", 
			"MbeTag.type" => "2", 
			"MbeTag.value" => "2", 
			"MbeTag.size" => "2", 
			"MbeTag.version" => "2", 
			"MbeTag.isHidden" => "2", 
			"MbeTag.setOffset" => "2", 
			"MbeTag.getOffset" => "2", 
			"MbeTag.getMbeElement" => "2", 
			"MbeTag.getTaggedElement" => "2", 
			"MbeTag.getTextElement" => "2", 
			"MbeTagDef.name" => "2", 
			"MbeTagDef.setName" => "2", 
			"MbeTagDef.prompt" => "2", 
			"MbeTagDef.style" => "2", 
			"MbeTagDef.tagType" => "2", 
			"MbeTagDef.defaultValue" => "2", 
			"MbeTagDef.isHidden" => "2", 
			"MbeTagDef.isConstant" => "2", 
			"MbeTagDef.tagId" => "2", 
			"MbeTagDef.add" => "2", 
			"MbeTagDef.update" => "2", 
			"MbeTagDef.delete" => "2", 
			"MbeTagSet.name" => "2", 
			"MbeTagSet.reportName" => "2", 
			"MbeTagSet.fileNumMbeTagSet.numTagDefs" => "2", 
			"MbeTagSet.getTagDefNames" => "2", 
			"MbeTagSet.add" => "2", 
			"MbeTagSet.update" => "2", 
			"MbeTagSet.delete" => "2", 
			"MbeTagSet.getTagDef" => "2", 
			"MbeTagSet.generateReport" => "2", 
			"MbeTagSet.deleteInstances" => "2", 
			"MbeView.active" => "2", 
			"MbeView.screenNum" => "2", 
			"MbeView.fastCurve" => "2", 
			"MbeView.noText" => "2", 
			"MbeView.slowFont" => "2", 
			"MbeView.lineWeight" => "2", 
			"MbeView.pattern" => "2", 
			"MbeView.textNode" => "2", 
			"MbeView.enterDataField" => "2", 
			"MbeView.grid" => "2", 
			"MbeView.levelSymbology" => "2", 
			"MbeView.construction" => "2", 
			"MbeView.dimension" => "2", 
			"MbeView.areaFill" => "2", 
			"MbeView.refBoundary" => "2", 
			"MbeView.fastRefClip" => "2", 
			"MbeView.deferApply" => "2", 
			"MbeView.update" => "2", 
			"MbeView.getLevels" => "2", 
			"MbeView.levelsOn" => "2", 
			"MbeView.levelsOff" => "2", 
			"MbeViews" => "2", 
			"MbeWriteCommand" => "2", 
			"MbeWriteError" => "2", 
			"MbeWriteMessage" => "2", 
			"MbeWritePrompt" => "2", 
			"MbeWriteStatus" => "2", 
			"Basic" => "3", 
			"Double" => "3", 
			"False" => "3", 
			"GBE_ADD" => "3", 
			"GBE_DIFF" => "3", 
			"GBE_Inside" => "3", 
			"GBE_OR" => "3", 
			"GBE_Outside" => "3", 
			"GBE_Overlap" => "3", 
			"GBE_Point" => "3", 
			"GBE_TextNode" => "3", 
			"GBE_TypeLine" => "3", 
			"GBE_TypeMixed" => "3", 
			"GBE_TypePoint" => "3", 
			"GBE_TypePolygon" => "3", 
			"GBE_XOR" => "3", 
			"Integer" => "3", 
			"Long" => "3", 
			"MbeDatabase" => "3", 
			"MbeEDField" => "3", 
			"MbeElement" => "3", 
			"MbeElementSet" => "3", 
			"MbePoint" => "3", 
			"MbeRange" => "3", 
			"MbeRefFile" => "3", 
			"MbeSetMember" => "3", 
			"MbeTable" => "3", 
			"MbeTag" => "3", 
			"MbeTagDef" => "3", 
			"MbeTagSet" => "3", 
			"MbeView" => "3", 
			"MBE_3DLib2DFile" => "3", 
			"MBE_3DOnly" => "3", 
			"MBE_AcceptQuery" => "3", 
			"MBE_Arc" => "3", 
			"MBE_AttributesProp" => "3", 
			"MBE_BadCellName" => "3", 
			"MBE_BSplineBoundary" => "3", 
			"MBE_BSplineKnot" => "3", 
			"MBE_BSplinePole" => "3", 
			"MBE_BSplineSurface" => "3", 
			"MBE_BSplineWeight" => "3", 
			"MBE_BUTTON_APPLY" => "3", 
			"MBE_BUTTON_CANCEL" => "3", 
			"MBE_BUTTON_DEFAULT" => "3", 
			"MBE_BUTTON_NO" => "3", 
			"MBE_BUTTON_OK" => "3", 
			"MBE_BUTTON_RETRY" => "3", 
			"MBE_BUTTON_STOP" => "3", 
			"MBE_BUTTON_YES" => "3", 
			"MBE_CellDeleted" => "3", 
			"MBE_CellExists" => "3", 
			"MBE_CellHeader" => "3", 
			"MBE_CellLibNotFound" => "3", 
			"MBE_CellLibraryHdr" => "3", 
			"MBE_CellNestError" => "3", 
			"MBE_CellNotFound" => "3", 
			"MBE_CenterBottom" => "3", 
			"MBE_CenterCenter" => "3", 
			"MBE_CenterTop" => "3", 
			"MBE_Color" => "3", 
			"MBE_CommandInput" => "3", 
			"MBE_ComplexShape" => "3", 
			"MBE_ComplexString" => "3", 
			"MBE_Cone" => "3", 
			"MBE_Conic" => "3", 
			"MBE_ConstructionClass" => "3", 
			"MBE_ConstRuleClass" => "3", 
			"MBE_CriticalIcon" => "3", 
			"MBE_Curve" => "3", 
			"MBE_DataPointInput" => "3", 
			"MBE_DBASE_Linkage" => "3", 
			"MBE_DBBinary" => "3", 
			"MBE_DBChar" => "3", 
			"MBE_DBDate" => "3", 
			"MBE_DBInteger" => "3", 
			"MBE_DBNumberMBE_DBRaw" => "3", 
			"MBE_Dimension" => "3", 
			"MBE_DimensionClass" => "3", 
			"MBE_DMRS_Linkage" => "3", 
			"MBE_ElementNotFound" => "3", 
			"MBE_ElemIgnore" => "3", 
			"MBE_ElemNormal" => "3", 
			"MBE_ElemPrioritizeMBE_Ellipse" => "3", 
			"MBE_EmptyFence" => "3", 
			"MBE_Erase" => "3", 
			"MBE_FileReadOnly" => "3", 
			"MBE_Hilite" => "3", 
			"MBE_HoleProp" => "3", 
			"MBE_IllegalDefinition" => "3", 
			"MBE_InfoIcon" => "3", 
			"MBE_INFORMIX_Linkage" => "3", 
			"MBE_INGRES_Linkage" => "3", 
			"MBE_InvalidRefOp" => "3", 
			"MBE_KeyinInput" => "3", 
			"MBE_LeftBottom" => "3", 
			"MBE_LeftCenter" => "3", 
			"MBE_LeftMarginBottom" => "3", 
			"MBE_LeftMarginCenter" => "3", 
			"MBE_LeftMarginTop" => "3", 
			"MBE_LeftTop" => "3", 
			"MBE_Line" => "3", 
			"MBE_LineString" => "3", 
			"MBE_Linestyle" => "3", 
			"MBE_LockedProp" => "3", 
			"MBE_MaxViews" => "3", 
			"MBE_MicroStation" => "3", 
			"MBE_ModifiedProp" => "3", 
			"MBE_MSplineCurve" => "3", 
			"MBE_MSPowerDraft" => "3", 
			"MBE_MSReview" => "3", 
			"MBE_MultiLine" => "3", 
			"MBE_NeedChars" => "3", 
			"MBE_NewProp" => "3", 
			"MBE_NoActiveCell" => "3", 
			"MBE_NoCellLibrary" => "3", 
			"MBE_NoFenceActive" => "3", 
			"MBE_None" => "3", 
			"MBE_NoOrigin" => "3", 
			"MBE_NormalDraw" => "3", 
			"MBE_NoSnapProp" => "3", 
			"MBE_ODBC_Linkage" => "3", 
			"MBE_Off" => "3", 
			"MBE_OffDesignPlane" => "3", 
			"MBE_OKBox" => "3", 
			"MBE_OKCancelBox" => "3", 
			"MBE_On" => "3", 
			"MBE_ORACLE_Linkage" => "3", 
			"MBE_PatternClass" => "3", 
			"MBE_PatternedLineClass" => "3", 
			"MBE_PlanarProp" => "3", 
			"MBE_PointString" => "3", 
			"MBE_PrimaryClass" => "3", 
			"MBE_PrimaryRuleClass" => "3", 
			"MBE_QueryFinished" => "3", 
			"MBE_QueryNotFinished" => "3", 
			"MBE_QuestionIcon" => "3", 
			"MBE_RasterComponent" => "3", 
			"MBE_RasterHeader" => "3", 
			"MBE_RefFileNotFound" => "3", 
			"MBE_ResetInput" => "3", 
			"MBE_RightBottom" => "3", 
			"MBE_RightCenter" => "3", 
			"MBE_RightMarginBottomMBE_RightMarginCenter" => "3", 
			"MBE_RightMarginTopMBE_RightTop" => "3", 
			"MBE_RIS_Linkage" => "3", 
			"MBE_SelectView" => "3", 
			"MBE_Shape" => "3", 
			"MBE_SharedCell" => "3", 
			"MBE_SharedCellDefinition" => "3", 
			"MBE_Solid" => "3", 
			"MBE_Success" => "3", 
			"MBE_Surface" => "3", 
			"MBE_SYBASE_Linkage" => "3", 
			"MBE_Tag" => "3", 
			"MBE_Text" => "3", 
			"MBE_TextNode" => "3", 
			"MBE_UnknownCommand" => "3", 
			"MBE_ViewIndProp" => "3", 
			"MBE_ViewNotFound" => "3", 
			"MBE_WarningIcon" => "3", 
			"MBE_Width" => "3", 
			"MBE_XBASE_Linkage" => "3", 
			"MBE_YesNoBox" => "3", 
			"MBE_YesNoCancelBox" => "3", 
			"PI" => "3", 
			"Single" => "3", 
			"String" => "3", 
			"True" => "3");

// Special extensions

// Each category can specify a PHP function that returns an altered
// version of the keyword.
        
        

$this->linkscripts    	= array(
			"1" => "donothing", 
			"2" => "donothing", 
			"3" => "donothing");
}


function donothing($keywordin)
{
	return $keywordin;
}

}?>
