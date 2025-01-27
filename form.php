<?php include 'common/header.php'; ?>
<?php include 'common/navigation.php'; ?>
<div class="contact-sec">
<div class="form-section" id="form-section">
    <div class="container" id="submit-form-page">
        <div class="form-content" id="myForm">
            <div class="form-header">
                <p>Commission <span class="highlight">Request</span></p>
            </div>

            <form class="form-form" id="uForm">
                <label class="name-title" for="name">
                    <p>Name <span class="require">(required)</span></p>
                </label>
                <div class="name-content">
                    <input type="text" id="ffname" name="name" placeholder="First Name" required>
                    <input type="text" id="llname" name="name" placeholder="Last Name" required>
                </div>
                <label class="name-title" for="name">
                    <p>Email Address <span class="require">(required)</span></p>
                </label>
                <input type="email" id="mmail" placeholder="Email Address" required>
                <label class="name-title" for="name">
                    <p>Message <span class="require">(required)</span></p>
                </label>
                <textarea type="text" id="mmsg" placeholder="Type message"></textarea>
                <div class="form-title">
                    <p>I would love to have my artwork before...</p>
                </div>
                <div class="form-txt">
                    <p>Include any deadline dates if necessary, e.g. Birthday. (Please note that drawings take at least
                        one
                        month to make + Delivery)</p>
                </div>

                <input type="date" id="date" name="date">
                <div class="form-title">
                    <p>What kind of drawing you want to like?<span class="require"> (required)</span></p>
                </div>
                <div class="form-txt">
                    <p>If you would like me to create a portrait with my own idea and reference photo, choose option:
                        Other

                    </p>
                </div>
                <div class="arts-drop">
                    <select type="text" id="arts" name="artlist">
                        <option value="regular">
                            <p>Regular Portrait</p>
                        </option>
                        <option value="pet">
                            <p>Pet Portrait</p>
                        </option>
                        <option value="religious">
                            <p>Religious Art</p>
                        </option>
                        <option value="other">
                            <P>Other</p>
                        </option>
                    </select>
                    <i class="fa-solid fa-chevron-down"></i>

                </div>
                <button type="submit" class="form-submit-btn">
                    <p>Submit</p>
                </button>
            </form>


        </div>
    </div>
    <div id="thank-you">
        <div class="thank-icon">
            <i class="fa-regular fa-circle-check"></i>
        </div>
        <div class="thank-txt">
            <p>Thank you! Your submission has been received.</p>
        </div>
        <div class="thank-btn">
            <button class="success-btn" onclick="resetForm()">
                <p>Submit Another</p>
            </button>
        </div>
    </div>
</div>
</div>



<?php include 'common/footer.php'; ?>