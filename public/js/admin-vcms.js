/**
 * =======================================
 * DIKELOLAIN - VCMS ADMIN JAVASCRIPT
 * =======================================
 * Virtual Content Management System
 * Edit content directly on visual preview
 */

(function($) {
    'use strict';

    // =======================================
    // VCMS Object
    // =======================================
    const VCMS = {
        modal: null,
        currentEditItem: null,

        init: function() {
            this.modal = $('#vcmsEditModal');
            this.bindEvents();
            this.initSidebar();
            console.log('VCMS Admin Initialized');
        },

        // =======================================
        // BIND EVENTS
        // =======================================
        bindEvents: function() {
            const self = this;

            // Edit Button Click
            $(document).on('click', '.vcms-edit-btn', function(e) {
                e.preventDefault();
                e.stopPropagation();
                const editType = $(this).data('edit-type');
                const section = $(this).closest('.vcms-editable-section');
                self.openEditModal(editType, section);
            });

            // Small Edit Indicator Click
            $(document).on('click', '.vcms-edit-indicator-small', function(e) {
                e.preventDefault();
                e.stopPropagation();
                const item = $(this).closest('.vcms-editable-item');
                const editType = item.data('edit-type');
                const itemId = item.data('item-id');
                self.openEditModal(editType, item);
            });

            // Close Modal
            $('.vcms-modal-close, .vcms-edit-modal-overlay').on('click', function() {
                self.closeEditModal();
            });

            // Cancel Button
            $('.btn-cancel').on('click', function() {
                self.closeEditModal();
            });

            // Save Button
            $('.btn-save-modal').on('click', function() {
                self.saveChanges();
            });

            // Save All Changes Button
            $('.btn-save-changes').on('click', function() {
                self.saveAllChanges();
            });

            // Prevent modal close when clicking inside modal content
            $('.vcms-edit-modal-content').on('click', function(e) {
                e.stopPropagation();
            });
        },

        // =======================================
        // SIDEBAR TOGGLE
        // =======================================
        initSidebar: function() {
            $('#sidebarToggle').on('click', function() {
                $('.admin-sidebar').toggleClass('active');
            });
        },

        // =======================================
        // OPEN EDIT MODAL
        // =======================================
        openEditModal: function(editType, element) {
            this.currentEditItem = element;
            const modalBody = $('.vcms-edit-modal-body');
            
            // Clear previous content
            modalBody.html('');

            // Generate form based on edit type
            const formHTML = this.generateEditForm(editType, element);
            modalBody.html(formHTML);

            // Show modal
            this.modal.addClass('active');
            $('body').css('overflow', 'hidden');

            console.log('Editing:', editType);
        },

        // =======================================
        // CLOSE EDIT MODAL
        // =======================================
        closeEditModal: function() {
            this.modal.removeClass('active');
            $('body').css('overflow', 'auto');
            this.currentEditItem = null;
        },

        // =======================================
        // GENERATE EDIT FORM
        // =======================================
        generateEditForm: function(editType, element) {
            let formHTML = '';

            switch(editType) {
                case 'hero':
                case 'hero-content':
                    formHTML = this.generateHeroForm(element);
                    break;
                
                case 'text':
                case 'section-title':
                    formHTML = this.generateTextForm(element);
                    break;
                
                case 'video':
                    formHTML = this.generateVideoForm(element);
                    break;
                
                case 'hero-images':
                case 'client-logos':
                    formHTML = this.generateImageGalleryForm(element);
                    break;
                
                case 'portfolio-item':
                    formHTML = this.generatePortfolioItemForm(element);
                    break;
                
                case 'services-tabs':
                    formHTML = this.generateServicesForm(element);
                    break;
                
                default:
                    formHTML = this.generateGenericForm(element);
            }

            return formHTML;
        },

        // =======================================
        // FORM GENERATORS
        // =======================================
        generateHeroForm: function(element) {
            const title = element.find('h1').html() || '';
            const description = element.find('p').first().text() || '';
            
            return `
                <div class="vcms-form-group">
                    <label>Hero Title</label>
                    <input type="text" class="vcms-input" name="hero_title" value="${this.stripHTML(title)}">
                    <small>Use &lt;span&gt; tags for highlighted text</small>
                </div>
                <div class="vcms-form-group">
                    <label>Hero Description</label>
                    <textarea class="vcms-textarea" name="hero_description" rows="4">${this.escapeHTML(description)}</textarea>
                </div>
                <div class="vcms-form-group">
                    <label>Button Text</label>
                    <input type="text" class="vcms-input" name="button_text" value="view our portfolio">
                </div>
                <div class="vcms-form-group">
                    <label>Button Link</label>
                    <input type="text" class="vcms-input" name="button_link" value="/portfolio">
                </div>
            `;
        },

        generateTextForm: function(element) {
            const textContent = element.text() || '';
            
            return `
                <div class="vcms-form-group">
                    <label>Text Content</label>
                    <textarea class="vcms-textarea" name="text_content" rows="6">${this.escapeHTML(textContent)}</textarea>
                </div>
            `;
        },

        generateVideoForm: function(element) {
            const videoSrc = element.find('source').attr('src') || '';
            
            return `
                <div class="vcms-form-group">
                    <label>Video URL</label>
                    <input type="text" class="vcms-input" name="video_url" value="${this.escapeHTML(videoSrc)}">
                    <small>Supports: MP4 video URL or YouTube embed URL</small>
                </div>
                <div class="vcms-form-group">
                    <label>Video Type</label>
                    <select class="vcms-select" name="video_type">
                        <option value="mp4">Self-hosted MP4</option>
                        <option value="youtube">YouTube Video</option>
                    </select>
                </div>
            `;
        },

        generateImageGalleryForm: function(element) {
            return `
                <div class="vcms-form-group">
                    <label>Gallery Images</label>
                    <div class="vcms-image-gallery">
                        <button type="button" class="btn-add-image">
                            <i class="fa-solid fa-plus"></i> Add Image
                        </button>
                        <div class="vcms-image-preview-grid">
                            <!-- Images will be loaded here -->
                        </div>
                    </div>
                    <small>Click to upload or manage images</small>
                </div>
            `;
        },

        generatePortfolioItemForm: function(element) {
            const title = element.find('h3').text() || '';
            const description = element.find('p').first().text() || '';
            
            return `
                <div class="vcms-form-group">
                    <label>Portfolio Title</label>
                    <input type="text" class="vcms-input" name="portfolio_title" value="${this.escapeHTML(title)}">
                </div>
                <div class="vcms-form-group">
                    <label>Portfolio Description</label>
                    <textarea class="vcms-textarea" name="portfolio_description" rows="3">${this.escapeHTML(description)}</textarea>
                </div>
                <div class="vcms-form-group">
                    <label>Media Type</label>
                    <select class="vcms-select" name="media_type">
                        <option value="youtube">YouTube Video</option>
                        <option value="image">Image</option>
                        <option value="video">Self-hosted Video</option>
                    </select>
                </div>
                <div class="vcms-form-group">
                    <label>Media URL</label>
                    <input type="text" class="vcms-input" name="media_url" placeholder="YouTube URL or Image URL">
                </div>
            `;
        },

        generateServicesForm: function(element) {
            return `
                <div class="vcms-form-group">
                    <label>Services Section</label>
                    <p>Click "Manage Services" to add, edit or remove service items.</p>
                    <a href="/admin/services" class="btn-manage-services">
                        <i class="fa-solid fa-cog"></i> Manage Services
                    </a>
                </div>
            `;
        },

        generateGenericForm: function(element) {
            return `
                <div class="vcms-form-group">
                    <label>Section Content</label>
                    <textarea class="vcms-textarea" name="content" rows="8">Content editing for this section type coming soon...</textarea>
                </div>
                <div class="alert alert-info">
                    <strong>Note:</strong> This section type requires custom implementation. 
                    Please contact developer for specific editing interface.
                </div>
            `;
        },

        // =======================================
        // SAVE CHANGES
        // =======================================
        saveChanges: function() {
            const self = this;
            
            // Get form data
            const formData = {};
            $('.vcms-edit-modal-body input, .vcms-edit-modal-body textarea, .vcms-edit-modal-body select').each(function() {
                const name = $(this).attr('name');
                const value = $(this).val();
                if (name) {
                    formData[name] = value;
                }
            });

            // Show loading state
            $('.btn-save-modal').html('<i class="fa-solid fa-spinner fa-spin"></i> Saving...').prop('disabled', true);

            // TODO: Replace with actual AJAX call
            // Example AJAX structure:
            /*
            $.ajax({
                url: '/admin/api/save-content',
                method: 'POST',
                data: formData,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    self.showNotification('Changes saved successfully!', 'success');
                    self.closeEditModal();
                    // Update preview with new data
                },
                error: function() {
                    self.showNotification('Error saving changes!', 'error');
                }
            });
            */

            // Simulate AJAX save (remove this in production)
            setTimeout(function() {
                console.log('Saving data:', formData);
                
                // Show success notification
                self.showNotification('Changes saved successfully!', 'success');
                
                // Close modal
                self.closeEditModal();
                
                // Reset button
                $('.btn-save-modal').html('<i class="fa-solid fa-save"></i> Save').prop('disabled', false);
            }, 1000);
        },

        // =======================================
        // SAVE ALL CHANGES
        // =======================================
        saveAllChanges: function() {
            const self = this;
            
            // Show loading state
            $('.btn-save-changes').html('<i class="fa-solid fa-spinner fa-spin"></i> Publishing...').prop('disabled', true);

            // TODO: Replace with actual AJAX call to publish all changes
            
            // Simulate AJAX save all (remove this in production)
            setTimeout(function() {
                self.showNotification('All changes published successfully!', 'success');
                $('.btn-save-changes').html('<i class="fa-solid fa-save"></i> Save Changes').prop('disabled', false);
            }, 1500);
        },

        // =======================================
        // SHOW NOTIFICATION
        // =======================================
        showNotification: function(message, type) {
            type = type || 'success';
            const iconClass = type === 'success' ? 'fa-check-circle' : 'fa-exclamation-circle';
            
            const notification = $(`
                <div class="vcms-notification ${type}">
                    <i class="fa-solid ${iconClass}"></i>
                    <span>${message}</span>
                </div>
            `);

            $('body').append(notification);

            setTimeout(function() {
                notification.addClass('show');
            }, 100);

            setTimeout(function() {
                notification.removeClass('show');
                setTimeout(function() {
                    notification.remove();
                }, 300);
            }, 3000);
        },

        // =======================================
        // HELPER FUNCTIONS
        // =======================================
        stripHTML: function(html) {
            return $('<div>').html(html).text();
        },

        escapeHTML: function(text) {
            const map = {
                '&': '&amp;',
                '<': '&lt;',
                '>': '&gt;',
                '"': '&quot;',
                "'": '&#039;'
            };
            return text.replace(/[&<>"']/g, function(m) { return map[m]; });
        }
    };

    // =======================================
    // INITIALIZE ON DOCUMENT READY
    // =======================================
    $(document).ready(function() {
        VCMS.init();
    });

})(jQuery);