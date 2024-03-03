<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>DYMO Label Framework JavaScript Library Samples: Preview and Print Label</title>
    <link rel="stylesheet" type="text/css" href="PreviewAndPrintLabel.css" />
    <script src = "dymo.js" type="text/javascript" charset="UTF-8"> </script>
    <script src = "PreviewandPrint.js" type="text/javascript" charset="UTF-8"> </script>
</head>

<body>
<h1>DYMO Label Framework JavaScript Library Samples: Preview and Print Label</h1>

<div class="header">
    <div id="sampleDesctiption">
        <span>
            This sample shows how new DYMO Label Connect JavaScript Library can be used to display a label preview as well as loading label from a local file and print it. This sample demonsrates:
            <ul>
            <li>Using dymo.label.framework.openLabelXml() and openLabelFile() to load label definition for further manipulation</li>
            <li>label.getAddressText() and setAddressText() to read and set address information on a Address object</li>
            <li>label.render() to generate label preview</li>
            <li>dymo.label.framework.getPrinters() to get information about installed DYMO printers</li>
            <li>label.print() to print the label</li>
            </ul>
            <p>Note: the preview does not work in Internet Explorer 6 and Internet Explorer 7.   We encourage to use Google  Chrome.</p>
            <p>Some browsers are not able to return the full path to try to open file, in this case, label will be loaded from predetermined XML.</p>
        </span>
    </div>
</div>

<div class="top">
    <div class="left">
        <div id="labelFileSelection">
            <label for="labelFile">Select label file with address object: </label>
            <input type="file" id="labelFile" name="labelFile"/>
        </div>

        <div id="addressDiv">
            <label for="addressTextArea">Current address:</label><br/>
            <textarea name="addressTextArea" id="addressTextArea"  rows='5' cols='40'>
        </textarea>
        </div>
    </div>

    <div class="content">
        <div id="labelImageDiv">
            <img id="labelImage" src="" alt="label preview"/>
        </div>

        <div class="printControls">
            <div id="printersDiv">
                <label for="printersSelect">Printer:</label>
                <select id="printersSelect"></select>
            </div>

            <div id="printDiv">
                <button id="printButton">Print</button>
                <!--            <a id="printButton"><img src="" alt=""/>Print</a>-->
            </div>
        </div>

        <div>
            <label>***** <b>Printer Details Information</b> *****</label>
            <div id="printerDetail"></div>
        </div>
    </div>
</div>

</body>

</html>
