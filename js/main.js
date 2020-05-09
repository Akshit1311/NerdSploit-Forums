const toolsData = [
    {
        name: "John The Ripper",
        content: "John the Ripper is a fast password cracker, currently available for many flavors of Unix, macOS, Windows, DOS, BeOS, and OpenVMS. Historically, its primary purpose is to detect weak Unix passwords.",
        link: "https://www.openwall.com/john/",
        type: "Password Cracking",
        image: "../images/tools/tool1.jfif"
    },

    {
        name: "Metasploit Project",
        content: "Metasploit is a penetration testing platform that enables you to find, exploit, and validate vulnerabilities. It provides the infrastructure, content, and tools to perform penetration tests and extensive security auditing and thanks to the open source community and Rapid7’s own hard working content team, new modules are added on a regular basis, which means that the latest exploit is available to you as soon as it’s published.",
        link: "https://www.metasploit.com/",
        type: "Framework",
        image: "../images/tools/tool2.png"
    },

    {
        name: "Snort",
        content: "Snort is an open source network intrusion prevention system, capable of performing real-time traffic analysis and packet logging on IP networks. It can perform protocol analysis, content searching/matching, and can be used to detect a variety of attacks and probes, such as buffer overflows, stealth port scans, CGI attacks, SMB probes, OS fingerprinting attempts, and much more ",
        link: "https://www.snort.org/",
        type: "Intrusion Prevention",
        image: "../images/tools/tool3.jpg"
    },

    {
        name: "Snort",
        content: "Snort is an open source network intrusion prevention system, capable of performing real-time traffic analysis and packet logging on IP networks. It can perform protocol analysis, content searching/matching, and can be used to detect a variety of attacks and probes, such as buffer overflows, stealth port scans, CGI attacks, SMB probes, OS fingerprinting attempts, and much more ",
        link: "https://www.snort.org/",
        type: "Intrusion Prevention",
        image: "../images/tools/tool3.jpg"
    }




    
];



function getTool(tool, i) {
    
    tmp = ``;
    tmpi = i+4;

    for(i; i<tmpi; i++){
        tmp += `
            <a href="${tool[i].link}">
            <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                <div class="side_post_image"><div><img src="${tool[i].image}" alt=""></div></div>
                <div class="side_post_content">
                    <div class="side_post_title tool-title">${tool[i].name}</div>
                    <small class="post_meta tool-type">${tool[i].type}</small>
                </div>
            </div>
            </a>
            <br>
        `;
    }

    return tmp;
}

// document.querySelector(".tool").innerHTML = `
//     ${toolsData.map(getTool).join("")}
// `;

document.querySelector(".tool-container").innerHTML = `

    
        <div class="side-post tool">
            ${
                getTool(toolsData, 0)
            }

        </div>


    
    
`;