( function( api ) {

	// Extends our custom "agriculture-farm" section.
	api.sectionConstructor['agriculture-farm'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );