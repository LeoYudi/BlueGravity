/**
 * Retrieves the translation of text.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-i18n/
 */
import { __ } from '@wordpress/i18n';

/**
 * React hook that is used to mark the block wrapper element.
 * It provides all the necessary props like the class name.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-block-editor/#useblockprops
 */
import { useBlockProps, InspectorControls } from '@wordpress/block-editor';

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

import {
	InnerBlocks,
	MediaUpload,
	MediaUploadCheck,
	RichText,
} from '@wordpress/block-editor';

import {
	PanelBody,
	TextControl,
	Button,
	Toolbar,
} from '@wordpress/components';

export default function Edit({ attributes, setAttributes }) {
	const { ctaTitle, ctaParagraph, ctaImageURL } = attributes

	return (
		<>
			<InspectorControls>
				<PanelBody title={'Settings'}>
					<TextControl
						label={'Title'}
						value={ctaTitle || ''}
						onChange={(value) => setAttributes({ ctaTitle: value })}
					/>
				</PanelBody>

				<PanelBody title='Image'>
					<Toolbar>
						<MediaUploadCheck>
							<MediaUpload
								onSelect={(media) => setAttributes({ ctaImageURL: media.url })}
								type='image'
								value={ctaImageURL}
								render={({ open }) => (
									<Button
										variant='secondary'
										onClick={open}
									>
										Select on media library
									</Button>
								)}
							/>
						</MediaUploadCheck>
					</Toolbar>
				</PanelBody>
			</InspectorControls>


			<div {...useBlockProps()}>
				<div className='title-container'>
					<h1 class='title block-title'>{ctaTitle || ''}</h1>
				</div>

				<div className='columns'>
					<div className='text-container'>
						<RichText
							value={ctaParagraph}
							placeholder='Type here ...'
							onChange={(value) => setAttributes({ ctaParagraph: value })}
							multiline='p'
						/>

						<div className='button-container'>
							<InnerBlocks
								template={
									[['core/button', {}]]
								}
								templateInsertUpdatesSelection
								templateLock='all'
							/>
						</div>
					</div>

					<div className='image-container'>
						<img src={ctaImageURL} />
					</div>
				</div>
			</div>
		</>
	);
}
