<?php
     ob_start();
     session_start();
     ob_end_clean();
     if(isset($_SESSION['udi'])){
        $idd= $_SESSION['udi'];  
     }else{
         ob_start();
         header("Location:../index.php");
         ob_end_clean();
     }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Golden Courts SARL Survey Form</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/png" href="logo inverse.png">
</head>
<body>
    <div class="container">
        <header>
            
            <p>To avoid delays, please ensure that the correct key details are provided.</p>
        </header>
        <form id="surveyForm" enctype="multipart/form-data" >
            <div class="section">
                <h2>Expedition</h2>
                <div class="form-group">
                    <label for="issuingBody">Issuing Body</label>
                    <select id="issuingBody" name="issuingBody" required>
                        <option value="OGEFREM">OGEFREM</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="certificateType">Certificate Type</label>
                    <select id="certificateType" name="certificateType" required>
                        <option value="Continuance">Continuance</option>
                        <option value="Regional">Regional</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="cargoOrigin">Cargo Origin</label>
                    <select id="cargoOrigin" name="cargoOrigin" required>
                        <option value="Uganda">Uganda</option>
                        <option value="Outside Uganda">Outside Uganda</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="shipmentRoute">Shipment Route</label>
                    <select id="shipmentRoute" name="shipmentRoute" required>
                        <option value="In-bound">In-bound</option>
                        <option value="Outbound">Outbound</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="certificateNo">Certificate No.</label>
                    <input type="text" id="certificateNo" name="certificateNo" placeholder="Enter certificate no." >
                </div>
                <div class="form-group">
                    <label for="feriAdCertificate">FERI/AD Certificate copy</label>
                    <input type="file" id="feriAdCertificate" name="feriAdCertificate" accept=".jpg,.jpeg,.png,.pdf,.doc,.docx" required>
                </div>
                <div class="form-group">
                    <label for="customsDeclNo">Customs Decl. No.</label>
                    <input type="text" id="customsDeclNo" name="customsDeclNo" placeholder="Enter customs declaration number" required>
                </div>
                <div class="form-group">
                    <label for="customsEntryDoc">Customs Entry document copy</label>
                    <input type="file" id="customsEntryDoc" name="customsEntryDoc" accept=".jpg,.jpeg,.png,.pdf,.doc,.docx" required>
                </div>
            </div>
            <div class="section">
                <h2>Import details</h2>
                <div class="form-group">
                    <label for="importerName">Importer name</label>
                    <input type="text" id="importerName" name="importerName" placeholder="Enter importer name" required>
                </div>
                <div class="form-group">
                    <label for="importerContact">Importer contact</label>
                    <input type="text" id="importerContact" name="importerContact" placeholder="Enter importer contact">
                </div>
            </div>
            <div class="section">
                <h2>Export details</h2>
                <div class="form-group">
                    <label for="exporterName">Exporter name</label>
                    <input type="text" id="exporterName" name="exporterName" placeholder="Enter exporter name" required>
                </div>
                <div class="form-group">
                    <label for="exporterContact">Exporter contact</label>
                    <input type="text" id="exporterContact" name="exporterContact" placeholder="Enter exporter contact">
                </div>
                <div class="form-group">
                    <label for="agentName">Clearing/forwarding agent</label>
                    <input type="text" id="agentName" name="agentName" placeholder="Enter agent name" required>
                </div>
                <div class="form-group">
                    <label for="agentContact">Clearing/forwarding agent contact</label>
                    <input type="tel" id="agentContact" name="agentContact" placeholder="Enter agent contact">
                </div>
            </div>
            <div class="section">
                <h2>Transport & Cargo details</h2>
                <div class="form-group">
                    <label for="transportMode">Transport mode</label>
                    <select id="transportMode" name="transportMode" required>
                        <option value="Road">Road</option>
                        <option value="Maritime">Maritime</option>
                        <option value="Rail">Rail</option>
                        <option value="Air">Air</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="transporterName">Transporter Name</label>
                    <input type="text" id="transporterName" name="transporterName" placeholder="Enter Transporter name" required>
                </div>
                <div class="form-group">
                    <label for="vehicleNumber">Vehicle number</label>
                    <input type="text" id="vehicleNumber" name="vehicleNumber" placeholder="Enter vehicle number" required>
                </div>
                <div class="form-group">
                    <label for="vehicleImages">Vehicle images</label>
                    <input type="file" id="vehicleImages" name="vehicleImages" accept=".jpg,.jpeg,.png,.pdf,.mp4,.avi">
                </div>
                <div class="form-group">
                    <label for="dischargeLocation">Discharge location/exit border</label>
                    <input type="text" id="dischargeLocation" name="dischargeLocation" placeholder="Enter discharge location" required>
                </div>
                <div class="form-group">
                    <label for="finalDestination">Final destination in DRC</label>
                    <input type="text" id="finalDestination" name="finalDestination" placeholder="Enter final destination" required>
                </div>
            </div>
            <div class="section">
                <h2>Values</h2>
                <div class="form-group">
                    <label for="fobCurrency">FOB Currency</label>
                    <select id="fobCurrency" name="fobCurrency" required>
                        <option value="USD">USD</option>
                        <option value="EUR">EUR</option>
                        <option value="GBP">GBP</option>
                        <option value="KES">KES</option>
                        <option value="UGX">UGX</option>
                        <option value="CNY">CNY</option>
                        <option value="AED">AED</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="fobValue">FOB value</label>
                    <input type="text" id="fobValue" name="fobValue" placeholder="Enter FOB value" required>
                </div>
                <div class="form-group">
                    <label for="incoterm">Incoterm</label>
                    <select id="incoterm" name="incoterm" required>
                        <option value="CIP">CIP</option>
                        <option value="FOB">FOB</option>
                        <option value="CIF">CIF</option>
                        <option value="CFR">CFR</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="freightCurrency">Freight Currency</label>
                    <select id="freightCurrency" name="freightCurrency" required>
                        <option value="USD">USD</option>
                        <option value="EUR">EUR</option>
                        <option value="GBP">GBP</option>
                        <option value="KES">KES</option>
                        <option value="UGX">UGX</option>
                        <option value="CNY">CNY</option>
                        <option value="AED">AED</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="freightValue">Freight value</label>
                    <input type="text" id="freightValue" name="freightValue" placeholder="Enter freight value" required>
                </div>
                <div class="form-group">
                    <label for="invoiceCopy">Commercial invoice copy</label>
                    <input type="file" id="invoiceCopy" name="invoiceCopy" accept=".jpg,.jpeg,.png,.pdf,.doc,.docx" required>
                </div>
                <div class="form-group">
                    <label for="supportingDocs">Additional Supporting documents</label>
                    <input type="file" id="supportingDocs" name="supportingDocs" accept=".jpg,.jpeg,.png,.pdf,.doc,.docx" multiple>
                </div>
                <div class="form-group">
                    <label for="validationNotes">Validation Notes</label>
                    <textarea id="validationNotes" name="validationNotes" placeholder="Enter validation notes" required></textarea>
                </div>
            </div>
            <div class="form-group submit-button">
                <button type="submit">Submit &rarr;</button>
            </div>
        </form>
    </div>
    <script src="script.js"></script>
</body>
</html>
