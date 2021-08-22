<?
    $ancho_apaisado = 801;
    $cantidad_de_filas=0;
    if ($cantidad_de_filas > 9) 
	    { 
	    $ancho_columna=$ancho_apaisado/$cantidad_de_filas;
	    }
	    else     $ancho_columna=$ancho_apaisado/9; 


    $archivo = fopen("./".str_replace(' ','_',$_POST["titulo"]).".jrxml",'w');
    fwrite($archivo,'<?xml version="1.0" encoding="UTF-8"?>'."\n");
    fwrite($archivo,'<!-- Creado por el Generador -->'."\n");
    fwrite($archivo,'<jasperReport xmlns="http://jasperreports.sourceforge.net/jasperreports" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://jasperreports.sourceforge.net/jasperreports http://jasperreports.sourceforge.net/xsd/jasperreport.xsd" name="Plantilla" pageWidth="842" pageHeight="595" orientation="Landscape" columnWidth="802" leftMargin="20" rightMargin="20" topMargin="20" bottomMargin="20" uuid="df013db5-f76e-44d3-b0df-bcbc46d93160">'."\n");
    fwrite($archivo,''."\n");
    fwrite($archivo,'    <property name="com.jaspersoft.studio.data.sql.tables" value=""/>'."\n");
    fwrite($archivo,'    <property name="com.jaspersoft.studio.data.defaultdataadapter" value="PGM"/>'."\n");
    fwrite($archivo,''."\n");
    fwrite($archivo,'    <style name="Title" fontName="Times New Roman" fontSize="50" isBold="true"/>'."\n");
    fwrite($archivo,'    <style name="SubTitle" forecolor="#221B5E" fontName="Arial" fontSize="18"/>'."\n");
    fwrite($archivo,'    <style name="Column header" forecolor="#666666" fontName="Arial" fontSize="8" isBold="true"/>'."\n");
    fwrite($archivo,'    <style name="Detail" fontName="Arial" fontSize="10"/>'."\n");
    fwrite($archivo,'    <style name="Row" mode="Transparent">'."\n");
    fwrite($archivo,'	<conditionalStyle>'."\n");
    fwrite($archivo,'	    <conditionExpression><![CDATA[$V{REPORT_COUNT}%2 == 0]]></conditionExpression>'."\n");
    fwrite($archivo,'	    <style backcolor="#d7e4f1"/>'."\n");
    fwrite($archivo,'	</conditionalStyle>'."\n");
    fwrite($archivo,'    </style>'."\n");
    fwrite($archivo,'    <parameter name="LoggedInUser" isForPrompting="false" class="com.jaspersoft.jasperserver.api.metadata.user.domain.User"/>'."\n");

    fwrite($archivo,'    <parameter name="FECHA_DESDE" class="java.lang.String"	 isForPrompting="true"/>'."\n");
    fwrite($archivo,'    <parameter name="FECHA_HASTA" class="java.lang.String"	 isForPrompting="true"/>'."\n");


for ($i = 1; $i <= 15;$i++)
    {
    if ($_POST["parametro$i"] == true)
	{
	fwrite($archivo,'    <parameter name="'.$_POST["campo$i"].'" class="java.lang.String"	 isForPrompting="true"/>'."\n");
	$leyendacampos .= '+ " '.$_POST["campo$i"].' = " + $P{'.$_POST["campo$i"].'}';
	if ($_POST["tipo$i"] == 'fecha') $campofecha = $_POST["campo$i"]; 
	}
    }



    fwrite($archivo,'    <queryString language="SQL">'."\n");
    fwrite($archivo,'	<![CDATA['.$_POST["sql"].']]>'."\n");
    fwrite($archivo,'    </queryString>'."\n");



for ($i = 1; $i <= 15;$i++)
    {
    if ($_POST["tipo$i"] == 'fecha') {
	$tipo[$i] = "java.sql.Timestamp";
	}
	else if ($_POST["tipo$i"] =='hora') {
	$tipo[$i] = "java.sql.Timestamp";
	    } 
	    else if ($_POST["tipo$i"] =='fechayhora') {
		fwrite($archivo,' pattern="dd/MM/yyyy hh:mm a"');
		} 
		else if ($_POST["tipo$i"] =='moneda') {
		    fwrite($archivo,' pattern="#,##0.00"');
		    }  
    }



if ($_POST["campo1"]) 
    {
    fwrite($archivo,'    <field name="'.$_POST["campo1"].'" class="java.lang.String">'."\n");
    fwrite($archivo,'	<property name="com.jaspersoft.studio.field.label" value="'.$_POST["campo1"].'"/>'."\n");
    fwrite($archivo,'	</field>'."\n");
    $cantidad_de_filas++;
    }
if ($_POST["campo2"]) 
    {
    fwrite($archivo,'    <field name="'.$_POST["campo2"].'" class="java.lang.String">'."\n");
    fwrite($archivo,'	<property name="com.jaspersoft.studio.field.label" value="'.$_POST["campo2"].'"/>'."\n");
    fwrite($archivo,'	</field>'."\n");
    $cantidad_de_filas++;
    }
if ($_POST["campo3"]) 
    {
    fwrite($archivo,'    <field name="'.$_POST["campo3"].'" class="java.lang.String">'."\n");
    fwrite($archivo,'	<property name="com.jaspersoft.studio.field.label" value="'.$_POST["campo3"].'"/>'."\n");
    fwrite($archivo,'	</field>'."\n");
    $cantidad_de_filas++;
    }
if ($_POST["campo4"]) 
    {
    fwrite($archivo,'    <field name="'.$_POST["campo4"].'" class="java.lang.String">'."\n");
    fwrite($archivo,'	<property name="com.jaspersoft.studio.field.label" value="'.$_POST["campo4"].'"/>'."\n");
    fwrite($archivo,'	</field>'."\n");
    $cantidad_de_filas++;
    }
if ($_POST["campo5"]) 
    {
    fwrite($archivo,'    <field name="'.$_POST["campo5"].'" class="java.lang.String">'."\n");
    fwrite($archivo,'	<property name="com.jaspersoft.studio.field.label" value="'.$_POST["campo5"].'"/>'."\n");
    fwrite($archivo,'	</field>'."\n");
    $cantidad_de_filas++;
    }
if ($_POST["campo6"]) 
    {
    fwrite($archivo,'    <field name="'.$_POST["campo6"].'" class="java.lang.String">'."\n");
    fwrite($archivo,'	<property name="com.jaspersoft.studio.field.label" value="'.$_POST["campo6"].'"/>'."\n");
    fwrite($archivo,'	</field>'."\n");
    $cantidad_de_filas++;
    }
if ($_POST["campo7"]) 
    {
    fwrite($archivo,'    <field name="'.$_POST["campo7"].'" class="java.lang.String">'."\n");
    fwrite($archivo,'	<property name="com.jaspersoft.studio.field.label" value="'.$_POST["campo7"].'"/>'."\n");
    fwrite($archivo,'	</field>'."\n");
    $cantidad_de_filas++;
    }
if ($_POST["campo8"]) 
    {
    fwrite($archivo,'    <field name="'.$_POST["campo8"].'" class="java.lang.String">'."\n");
    fwrite($archivo,'	<property name="com.jaspersoft.studio.field.label" value="'.$_POST["campo8"].'"/>'."\n");
    fwrite($archivo,'	</field>'."\n");
    $cantidad_de_filas++;
    }

if ($_POST["campo9"]) 
    {
    fwrite($archivo,'    <field name="'.$_POST["campo9"].'" class="java.lang.String">'."\n");
    fwrite($archivo,'	<property name="com.jaspersoft.studio.field.label" value="'.$_POST["campo9"].'"/>'."\n");
    fwrite($archivo,'	</field>'."\n");
    $cantidad_de_filas++;
    }

if ($_POST["campo10"]) 
    {
    fwrite($archivo,'    <field name="'.$_POST["campo10"].'" class="java.lang.String">'."\n");
    fwrite($archivo,'	<property name="com.jaspersoft.studio.field.label" value="'.$_POST["campo10"].'"/>'."\n");
    fwrite($archivo,'	</field>'."\n");
    $cantidad_de_filas++;
    }
if ($_POST["campo11"]) 
    {
    fwrite($archivo,'    <field name="'.$_POST["campo11"].'" class="java.lang.String">'."\n");
    fwrite($archivo,'	<property name="com.jaspersoft.studio.field.label" value="'.$_POST["campo11"].'"/>'."\n");
    fwrite($archivo,'	</field>'."\n");
    $cantidad_de_filas++;
    }
if ($_POST["campo12"]) 
    {
    fwrite($archivo,'    <field name="'.$_POST["campo12"].'" class="java.lang.String">'."\n");
    fwrite($archivo,'	<property name="com.jaspersoft.studio.field.label" value="'.$_POST["campo12"].'"/>'."\n");
    fwrite($archivo,'	</field>'."\n");
    $cantidad_de_filas++;
    }
if ($_POST["campo13"]) 
    {
    fwrite($archivo,'    <field name="'.$_POST["campo13"].'" class="java.lang.String">'."\n");
    fwrite($archivo,'	<property name="com.jaspersoft.studio.field.label" value="'.$_POST["campo13"].'"/>'."\n");
    fwrite($archivo,'	</field>'."\n");
    $cantidad_de_filas++;
    }
if ($_POST["campo14"]) 
    {
    fwrite($archivo,'    <field name="'.$_POST["campo14"].'" class="java.lang.String">'."\n");
    fwrite($archivo,'	<property name="com.jaspersoft.studio.field.label" value="'.$_POST["campo14"].'"/>'."\n");
    fwrite($archivo,'	</field>'."\n");
    $cantidad_de_filas++;
    }

if ($_POST["campo15"]) 
    {
    fwrite($archivo,'    <field name="'.$_POST["campo15"].'" class="java.lang.String">'."\n");
    fwrite($archivo,'	<property name="com.jaspersoft.studio.field.label" value="'.$_POST["campo15"].'"/>'."\n");
    fwrite($archivo,'	</field>'."\n");
    $cantidad_de_filas++;
    }

fwrite($archivo,'    <background>'."\n");
fwrite($archivo,'	<band splitType="Stretch"/>'."\n");
fwrite($archivo,'    </background>'."\n");
fwrite($archivo,'    <title>'."\n");
fwrite($archivo,'	<band height="136" splitType="Stretch">'."\n");
fwrite($archivo,'	    <staticText>'."\n");
fwrite($archivo,'		<reportElement style="Title" x="220" y="0" width="360" height="62" uuid="bc1ce1da-8232-46ea-be55-cec4abb986dd"/>'."\n");
fwrite($archivo,'		<textElement textAlignment="Center" verticalAlignment="Middle">'."\n");
fwrite($archivo,'		    <font size="19"/>'."\n");
fwrite($archivo,'		</textElement>'."\n");
fwrite($archivo,'		<text><![CDATA[Municipalidad de Río Gallegos]]></text>'."\n");
fwrite($archivo,'	    </staticText>'."\n");
fwrite($archivo,'	    <staticText>'."\n");
fwrite($archivo,'		<reportElement style="SubTitle" x="303" y="62" width="196" height="22" uuid="f6a78448-8260-4445-a9e0-e3fb53b080d9"/>'."\n");
fwrite($archivo,'		<textElement textAlignment="Center" verticalAlignment="Middle">'."\n");
fwrite($archivo,'		    <font fontName="Times New Roman" size="17"/>'."\n");
fwrite($archivo,'		</textElement>'."\n");
fwrite($archivo,'		<text><![CDATA['.$_POST["titulo"].']]></text>'."\n");
fwrite($archivo,'	    </staticText>'."\n");
fwrite($archivo,'	    <textField>'."\n");
fwrite($archivo,'		<reportElement style="SubTitle" x="0" y="82" width="802" height="22"/>'."\n");
fwrite($archivo,'		<textElement textAlignment="Center" verticalAlignment="Middle">'."\n");
fwrite($archivo,'		    <font fontName="Times New Roman" size="10"/>'."\n");
fwrite($archivo,'		</textElement>'."\n");

$leyendacampos = '"Con "'.$leyendacampos;

//.Tipo de documento = " + $P{tipodoc} + " Desde " + $P{fecha_Desde}  + " Hasta " + $P{fecha_Hasta}.'";
fwrite($archivo,'		<textFieldExpression><![CDATA[');
if ($_POST["leyendacampos"] == true) fwrite($archivo,$leyendacampos);
if ($_POST["leyendarangodefechas"] == true) fwrite($archivo,' + " '.$campofecha.' desde " + $P{fecha_Desde}  + " hasta " + $P{fecha_Hasta}');
fwrite($archivo,']]></textFieldExpression>'."\n");

fwrite($archivo,'	    </textField>'."\n");
fwrite($archivo,''."\n");
fwrite($archivo,'	    <image>'."\n");
fwrite($archivo,'		<reportElement x="0" y="0" width="80" height="84" uuid="cb14f357-81b8-4d9a-8e36-dcba574d65b2"/>'."\n");
fwrite($archivo,'		<imageExpression><![CDATA["../logo.png"]]></imageExpression>'."\n");
fwrite($archivo,'	    </image>'."\n");
fwrite($archivo,'	</band>'."\n");
fwrite($archivo,'    </title>'."\n");
fwrite($archivo,'    <pageHeader>'."\n");
fwrite($archivo,'	<band splitType="Stretch">'."\n");
fwrite($archivo,'	    <property name="com.jaspersoft.studio.layout" value="com.jaspersoft.studio.editor.layout.HorizontalRowLayout"/>'."\n");
fwrite($archivo,'	</band>'."\n");
fwrite($archivo,'    </pageHeader>'."\n");
fwrite($archivo,'    <columnHeader>'."\n");
fwrite($archivo,'	<band height="16" splitType="Stretch">'."\n");
fwrite($archivo,'	    <line>'."\n");
fwrite($archivo,'		<reportElement positionType="FixRelativeToBottom" x="0" y="15" width="802" height="1" uuid="e9d2002a-c8ee-4649-a258-640dad29110c"/>'."\n");
fwrite($archivo,'		<graphicElement>'."\n");
fwrite($archivo,'		    <pen lineWidth="0.5" lineColor="#999999"/>'."\n");
fwrite($archivo,'		</graphicElement>'."\n");
fwrite($archivo,'	    </line>'."\n");

$x = 0;
$w = $ancho_columna;


for ($i = 1; $i <= $cantidad_de_filas;$i++)
    {
    fwrite($archivo,'	    <staticText>'."\n");
    fwrite($archivo,'		<reportElement style="Column header" x="'.$x.'" y="0" width="'.$w.'" height="15" forecolor="#221B5E" uuid="a12fe179-ee5b-4def-88f5-21824ad3ce6b">'."\n");
    fwrite($archivo,'		    <property name="com.jaspersoft.studio.spreadsheet.connectionID" value="e148f281-0d3e-4fb9-a77c-9c57410f5d62"/>'."\n");
    fwrite($archivo,'		</reportElement>'."\n");
    fwrite($archivo,'		<text><![CDATA['.$_POST["campo$i"].']]></text>'."\n");
    fwrite($archivo,'	    </staticText>'."\n");
    $x = $x + $w;
    }

fwrite($archivo,'	</band>'."\n");
fwrite($archivo,'    </columnHeader>'."\n");
fwrite($archivo,'    <detail>'."\n");
fwrite($archivo,'	<band height="15" splitType="Stretch">'."\n");
fwrite($archivo,'	    <frame>'."\n");
fwrite($archivo,'		<reportElement style="Row" mode="Opaque" x="0" y="0" width="802" height="15" uuid="fa7cec56-4ec1-48e6-a26e-7266a995d174"/>'."\n");


$x = 0;
$w = $ancho_columna;


for ($i = 1; $i <= $cantidad_de_filas;$i++)
    {
    fwrite($archivo,'		<textField isStretchWithOverflow="true"');

    if ($_POST["tipo$i"] == 'fecha') {
	fwrite($archivo,' pattern="dd/MM/yyyy"');
	}
	else if ($_POST["tipo$i"] =='hora') {
	    fwrite($archivo,' pattern="hh:mm a"');
	    } 
	    else if ($_POST["tipo$i"] =='fechayhora') {
		fwrite($archivo,' pattern="dd/MM/yyyy hh:mm a"');
		} 
		else if ($_POST["tipo$i"] =='moneda') {
		    fwrite($archivo,' pattern="#,##0.00"');
		    }  

    fwrite($archivo,'>'."\n");
    fwrite($archivo,'		    <reportElement style="Detail" x="'.$x.'" y="0" width="'.$w.'"  height="15" uuid="176d669b-c605-4d03-862f-d3d06e944a27">'."\n");
    fwrite($archivo,'			<property name="com.jaspersoft.studio.spreadsheet.connectionID" value="e148f281-0d3e-4fb9-a77c-9c57410f5d62"/>'."\n");
    fwrite($archivo,'		    </reportElement>'."\n");
    fwrite($archivo,'		    <textFieldExpression><![CDATA[$F{'.$_POST["campo$i"].'}]]></textFieldExpression>'."\n");
    fwrite($archivo,'		</textField>'."\n");
    $x = $x + $w;
    }
fwrite($archivo,'	    </frame>'."\n");
fwrite($archivo,'	</band>'."\n");
fwrite($archivo,'    </detail>'."\n");
fwrite($archivo,'    <columnFooter>'."\n");
fwrite($archivo,'	<band height="6" splitType="Stretch">'."\n");
fwrite($archivo,'	    <line>'."\n");
fwrite($archivo,'		<reportElement positionType="FixRelativeToBottom" x="0" y="3" width="802" height="1" uuid="fa5e88d5-a011-4e32-8f12-ce923f903111"/>'."\n");
fwrite($archivo,'		<graphicElement>'."\n");
fwrite($archivo,'		    <pen lineWidth="0.5" lineColor="#999999"/>'."\n");
fwrite($archivo,'		</graphicElement>'."\n");
fwrite($archivo,'	    </line>'."\n");
fwrite($archivo,'	</band>'."\n");
fwrite($archivo,'    </columnFooter>'."\n");
fwrite($archivo,'    <pageFooter>'."\n");
fwrite($archivo,'	<band height="25" splitType="Stretch">'."\n");
fwrite($archivo,'	    <frame>'."\n");
fwrite($archivo,'		<reportElement mode="Opaque" x="-21" y="1" width="843" height="24" forecolor="#F2F1F0" backcolor="#7FA9E2" uuid="5d8169bd-4a75-48c8-8a68-6d3ad5ba9402"/>'."\n");
fwrite($archivo,'		<textField evaluationTime="Report">'."\n");
fwrite($archivo,'		    <reportElement style="Column header" x="783" y="1" width="40" height="20" forecolor="#221B5E" uuid="e5e27efa-b599-499b-9ca3-848cb511cb7b"/>'."\n");
fwrite($archivo,'		    <textElement verticalAlignment="Middle">'."\n");
fwrite($archivo,'			<font size="10" isBold="false"/>'."\n");
fwrite($archivo,'		    </textElement>'."\n");
fwrite($archivo,'		    <textFieldExpression><![CDATA[" " + $V{PAGE_NUMBER}]]></textFieldExpression>'."\n");
fwrite($archivo,'		</textField>'."\n");
fwrite($archivo,'		<textField>'."\n");
fwrite($archivo,'		    <reportElement style="Column header" x="703" y="1" width="80" height="20" forecolor="#221B5E" uuid="18cfe1ca-f7d6-48b0-9827-28578b42a5e0"/>'."\n");
fwrite($archivo,'		    <textElement textAlignment="Right" verticalAlignment="Middle">'."\n");
fwrite($archivo,'			<font size="10" isBold="false"/>'."\n");
fwrite($archivo,'		    </textElement>'."\n");
fwrite($archivo,'		    <textFieldExpression><![CDATA["Pagina "+$V{PAGE_NUMBER}+" de "]]></textFieldExpression>'."\n");
fwrite($archivo,'		</textField>'."\n");
fwrite($archivo,'		<textField pattern="EEEEE dd MMMMM yyyy">'."\n");
fwrite($archivo,'		    <reportElement style="Column header" x="22" y="1" width="300" height="20" forecolor="#221B5E" uuid="fbce24bb-3cb1-44a3-8eec-8c067ddbe5b5"/>'."\n");
fwrite($archivo,'		    <textElement verticalAlignment="Middle">'."\n");
fwrite($archivo,'			<font size="10" isBold="false"/>'."\n");
fwrite($archivo,'		    </textElement>'."\n");
fwrite($archivo,'		    <textFieldExpression><![CDATA[new java.util.Date()]]></textFieldExpression>'."\n");
fwrite($archivo,'		</textField>'."\n");
fwrite($archivo,'		<textField>'."\n");
fwrite($archivo,'		    <reportElement style="Column header" x="301" y="1" width="300" height="20" forecolor="#221B5E"/>'."\n");
fwrite($archivo,'		    <textElement verticalAlignment="Middle">'."\n");
fwrite($archivo,'			<font size="10" isBold="false"/>'."\n");
fwrite($archivo,'		    </textElement>'."\n");
fwrite($archivo,'		    <textFieldExpression><![CDATA["Usuario: " + $P{LoggedInUser}.getUsername()]]></textFieldExpression>'."\n");
fwrite($archivo,'		</textField>'."\n");
fwrite($archivo,''."\n");
fwrite($archivo,'	    </frame>'."\n");
fwrite($archivo,'	</band>'."\n");
fwrite($archivo,'    </pageFooter>'."\n");
fwrite($archivo,'    <summary>'."\n");
fwrite($archivo,'	<band splitType="Stretch"/>'."\n");
fwrite($archivo,'    </summary>'."\n");
fwrite($archivo,'</jasperReport>'."\n");
fclose($archivo);
?>
<?php
header("Content-disposition: attachment; filename=".str_replace(' ','_',$_POST["titulo"]).".jrxml");
header("Content-type: text/plain");
readfile(str_replace(' ','_',$_POST["titulo"]).".jrxml");
unlink(str_replace(' ','_',$_POST["titulo"]).".jrxml");
?>