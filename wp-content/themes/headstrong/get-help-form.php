<form
  class="get-help-form"
  action="https://www.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8"
  method="POST"
  validate
>
  <input type="hidden" name="oid" value="00D37000000JqjL">
  <input type="hidden" id="lead_source" name="lead_source" value="Web to Lead" />
  <input type="hidden" name="retURL" value="<?php echo home_url() . '/get-help'; ?>">

  <div class="get-help-form__group">
    <label class="get-help-form__label" for="first_name">
      First Name
    </label>
    <input class="get-help-form__input" id="first_name" maxlength="40" name="first_name" size="20" type="text" required>
  </div>

  <div class="get-help-form__group">
    <label class="get-help-form__label" for="last_name">
      Last Name
    </label>
    <input class="get-help-form__input" id="last_name" maxlength="80" name="last_name" size="20" type="text">
  </div>

  <div class="get-help-form__group">
    <label class="get-help-form__label" for="email">
      Email
    </label>
    <input class="get-help-form__input" id="email" maxlength="80" name="email" size="20" type="email" required>
  </div>

  <div class="get-help-form__group">
    <label class="get-help-form__label" for="phone">
      Phone
    </label>
    <input class="get-help-form__input" id="phone" maxlength="40" name="phone" size="20" type="phone">
  </div>

  <div class="get-help-form__group">
    <label class="get-help-form__label" for="city">
      City
    </label>
    <input class="get-help-form__input" id="city" maxlength="40" name="city" size="20" type="text" required>
  </div>

  <div class="get-help-form__group">
    <label class="get-help-form__label" for="state">
      State/Province
    </label>
    <input class="get-help-form__input" id="state" maxlength="20" name="state" size="20" type="text" required>
  </div>

  <div class="get-help-form__group">
    <label class="get-help-form__label" for="00N370000060fw7">Did you serve in Iraq or Afganistan?</label>
    <select class="get-help-form__select" id="00N370000060fw7" name="00N370000060fw7" title="Did you serve in Iraq or Afganistan?">
      <option value="">
        --None--
      </option>
      <option value="Yes">
        Yes
      </option>
      <option value="No">
        No
      </option>
    </select>
  </div>

  <div class="get-help-form__group">
    <label class="get-help-form__label" for="00N370000060fwC">Branch of Service</label>
    <input class="get-help-form__input" id="00N370000060fwC" maxlength="30" name="00N370000060fwC" size="20" type="text" />
  </div>

  <label class="get-help-form__label" for="00N370000060fwH">Message</label>
  <textarea class="get-help-form__textarea" id="00N370000060fwH" name="00N370000060fwH" rows="3" type="text" wrap="soft"></textarea>

  <div>
    <input
      class="ga-track get-help-form__submit"
      data-ga-action="clicked on form submit"
      data-ga-category="get-help"
      data-ga-label="get-help"
      name="submit"
      type="submit"
    />
    <div class="get-help-form__crisis">
      <h3>If you are in immediate crisis:</h3>
      <img src="/wp-content/uploads/2016/03/veterans-crisis-line.png" class="img-responsive" alt="Veterans' crisis line: 1-800-273-8255 press 1" width="230" height="77">
    </div>
  </div>

  <!--
  <input type="hidden" name="debug" value=1>
  <input type="hidden" name="debugEmail" value="maureen@nexgenconsultants.com">
   -->

</form>
