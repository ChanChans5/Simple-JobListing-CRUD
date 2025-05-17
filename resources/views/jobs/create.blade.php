<x-layout>
    <x-page-heading>New Job</x-page-heading>

    <x-forms.form method="POST" action="/jobs">
        <x-forms.input label="Title" name="title" placeholder="CEO"/>
        <x-forms.input label="Salary" name="salary" placeholder="$99,999 USD"/>
        <x-forms.input label="Location" name="location" placeholder="Davao City, Philippines"/>
        <x-forms.select label="Schedule" name="schedule">
            <option value="Part Time">Part time</option>
            <option value="Full Time">Full time</option>
        </x-forms.select>
        <x-forms.input label="URL" name="url" placeholder="https://hatdog.ph/"/>
        <x-forms.checkbox label="Feature (Consts Extra)" name="featured "></x-forms.checkbox>

        <x-forms.divider/>

        <x-forms.input label="Tags (comma separated)" name="tags" placeholder="laracasts, video, education"/>

        <x-forms.button type="submit">Publish</x-forms.button>
</x-forms.form>
</x-layout>