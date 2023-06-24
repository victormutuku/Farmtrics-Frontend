<div>
    <select aria-label="Select Language" class="form-control changeLang cursor-pointer bg-transparent lg:bg-white md:bg-transparent sm:bg-transparent shadow-none border-none focus:ring-forestgreen" name="language-selection">
        <option class="hover:bg-green-100 focus:bg-green-100" value="en"{{ session()->get('locale') =='en' ? 'selected' : '' }}>{{ __('navbar.English') }}</option>
        <option class="hover:bg-green-100" value="fr"{{ session()->get('locale') =='fr' ? 'selected' : '' }}>{{ __('navbar.French') }}</option>
    </select>
</div>