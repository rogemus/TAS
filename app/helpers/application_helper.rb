module ApplicationHelper

  def status_document_link(status)
      if status.document && status.document.attachment?
    content_tag(:span, "attachment", class: "label label-info") +
    link_to(status.document.attachment_file_name, status.document.attachment.url)


      end
  end


  def flash_class(type)
    case type
    when :alert
      "alert-error"
    when :notice
      "alert-success"
    else
      "alert-success"
    end
  end
end
