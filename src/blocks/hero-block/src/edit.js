/**
 * React hook that is used to mark the block wrapper element.
 * It provides all the necessary props like the class name.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-block-editor/#useblockprops
 */
import { useBlockProps, InspectorControls, MediaUpload } from '@wordpress/block-editor';

/**
 * Lets webpack process CSS, SASS or SCSS files referenced in JavaScript files.
 * Those files can contain any CSS code that gets applied to the editor.
 *
 * @see https://www.npmjs.com/package/@wordpress/scripts#using-css
 */
import './editor.scss';

/**
 * The edit function describes the structure of your block in the context of the
 * editor. This represents what the editor will render when the block is used.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-edit-save/#edit
 *
 * @return {Element} Element to render.
 */

import { Button, PanelBody, TextControl } from '@wordpress/components';

export default function Edit({ attributes, setAttributes }) {
	const { heroImage, heroTitle } = attributes;

	return (
		<>
			<InspectorControls>
				<PanelBody title={'Configurações'}>
					<TextControl
						label={'Título'}
						value={heroTitle || ''}
						onChange={(value) => setAttributes({ heroTitle: value })}
					/>
				</PanelBody>

				<PanelBody title={'Imagem'}>
					<MediaUpload
						allowedTypes={['image']}
						value={heroImage}
						onSelect={(value) => { setAttributes({ heroImage: value.url }) }}
						render={({ open }) => (
							<Button
								variant='secondary'
								onClick={open}
							>
								Select on media library
							</Button>
						)}
					/>
				</PanelBody>
			</InspectorControls>
			<div {...useBlockProps()} style={{ backgroundImage: `url(${heroImage || ''})` }}>
				<div className='dark-filter'>
					<div className='title-container'>
						<h1 className='hero-title'>
							{heroTitle || ''}
						</h1>
					</div>
				</div>
			</div>
		</>
	);
}
