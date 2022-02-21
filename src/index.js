const { registerBlockType } = wp.blocks;

registerBlockType("mehan/mehan-testimonial", {
	// built-in attributes
	title: "Testimonial",
	description: "Testomonial block from the Mehan Theme",
	icon: "format-image",
	category: "design",

	// custom attributes
	attributes: {
		sub_title: {
			type: "string",
			source: "html",
			selector: "h3",
		},
		title: {
			type: "string",
			source: "html",
			selector: "h2",
		},
	},
	// custom functions

	// built-in functions
	edit({ attributes, setAttributes }) {
		function updateSubTitle(e) {
			setAttributes({ sub_title: e.target.value });
		}

		return (
			<input
				value={attributes.sub_title}
				onChange={updateSubTitle()}
				type="text"
			/>
		);
	},
	save({ attributes }) {
		return <div>{attributes.sub_title}</div>;
	},
});
