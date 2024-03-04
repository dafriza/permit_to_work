<div class="d-flex flex-row-reverse bd-highlight">
    <div class="p-2 bd-highlight">
        <button class="btn btn-secondary" type="submit"
            @if ($if_complete) disabled @endif>Save</button>
        @if (!$if_complete)
            <a id="submit_permit_to_work" style="text-decoration: none"
                class="btn btn-primary me-2 disabled">Submit</a>
        @endif
    </div>
</div>
