import * as FilePond from 'filepond';

// Import the plugin code
import FilePondPluginImagePreview from 'filepond-plugin-image-preview';
import FilePondPluginFilePoster from 'filepond-plugin-file-poster';

// Import the plugin styles
import 'filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css';
import 'filepond-plugin-file-poster/dist/filepond-plugin-file-poster.css';

// Register the plugin
FilePond.registerPlugin(FilePondPluginImagePreview);
FilePond.registerPlugin(FilePondPluginFilePoster);

window.FilePond = FilePond;
