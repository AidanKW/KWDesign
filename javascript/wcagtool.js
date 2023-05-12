function toggleDropdown(header) {
  const content = header.nextElementSibling;
  const icon = header.querySelector('.fa-chevron-right');

  content.classList.toggle('active');
  icon.classList.toggle('rotate');
}

function markAsDone(button) {
  const dropdownHeader = button.parentElement.parentElement.parentElement.previousElementSibling;
  dropdownHeader.classList.toggle('checked');

  const isDone = dropdownHeader.classList.contains('checked');
  const buttonText = isDone ? 'Undo marking' : 'Mark as done';
  button.textContent = buttonText;
}

function toggleGroup(button) {
  const dropdownGroup = button.parentNode;
  const dropdowns = dropdownGroup.querySelectorAll('.dropdown');
  const isExpandAll = !button.classList.contains('active');

  dropdowns.forEach(dropdown => {
    const content = dropdown.querySelector('.dropdown-content');
    const icon = dropdown.querySelector('.dropdown-icon');

    if (isExpandAll) {
      content.classList.add('active');
      icon.classList.add('rotate');
    } else {
      content.classList.remove('active');
      icon.classList.remove('rotate');
    }
  });

  // Toggle the button state and update the button text
  button.classList.toggle('active');
  button.textContent = isExpandAll ? 'Collapse All' : 'Expand All';
}





function expandAllDropdowns() {
  const dropdowns = document.querySelectorAll('.dropdown');
  const firstDropdown = dropdowns[0];
  const isAllExpanded = !firstDropdown.querySelector('.dropdown-content').classList.contains('active');
  const buttonText = isAllExpanded ? 'Collapse All' : 'Expand All';

  dropdowns.forEach(dropdown => {
    const header = dropdown.querySelector('.dropdown-header');
    const content = dropdown.querySelector('.dropdown-content');
    const icon = header.querySelector('.fa-chevron-right');

    if (isAllExpanded) {
      content.classList.add('active');
      icon.classList.add('rotate');
    } else {
      content.classList.remove('active');
      icon.classList.remove('rotate');
    }
  });

  const buttons = document.querySelectorAll('.expand-all-button');
  buttons.forEach(button => {
    button.textContent = buttonText;
  });
}

