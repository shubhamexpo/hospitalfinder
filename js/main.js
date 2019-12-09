const AddBloodGroup = document.querySelector('#AddBloodGroup');
const addBloodG = document.querySelector('.addBloodG');
AddBloodGroup.addEventListener('click', showAddBlood);

function showAddBlood() {
    addBloodG.style.display = 'flex';
}

const closeAddBloodG = document.querySelector('.closeAddBloodG');
closeAddBloodG.addEventListener('click', closeAddBlood);

function closeAddBlood() {
    addBloodG.style.display = 'none';
}


const addDoctor = document.querySelector('.addDoctor');
const addDoctorInfo = document.querySelector('.addDoctorInfo');
const closeAddDoctorInfo = document.querySelector('.closeAddDoctorInfo');

addDoctor.addEventListener('click', showAddDoctorInfo);
closeAddDoctorInfo.addEventListener('click', closeAddDoctorInfos);

function showAddDoctorInfo() {
    addDoctorInfo.style.display = 'flex';
}

function closeAddDoctorInfos() {
    addDoctorInfo.style.display = 'none';
}

const editPhotos = document.querySelector('#editPhotos');
const editHospitalPhoto = document.querySelector('.editHospitalPhoto');
const closeEditHospitalPhoto = document.querySelector('.closeEditHospitalPhoto');

editPhotos.addEventListener('click', showEditHospitalPhoto);
closeEditHospitalPhoto.addEventListener('click', closeEditHospitalPhotos);

function showEditHospitalPhoto() {
    editHospitalPhoto.style.display = 'flex';
}

function closeEditHospitalPhotos() {
    editHospitalPhoto.style.display = 'none';
}


const editProfile = document.querySelector('#editProfile');
const editProfileDesign = document.querySelector('.editProfile');
const closeEditProfile = document.querySelector('.closeEditProfile');

editProfile.addEventListener('click', showEditProfileDesign);
closeEditProfile.addEventListener('click', closeEditProfileDesign);

function showEditProfileDesign() {
    editProfileDesign.style.display = 'flex';
}

function closeEditProfileDesign() {
    editProfileDesign.style.display = 'none';
}