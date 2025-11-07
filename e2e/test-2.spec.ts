import { test, expect } from '@playwright/test';

test('test', async ({ page }) => {
  await page.goto('http://yarsi-baru.test/admin/login');
  await page.getByRole('textbox', { name: 'Password*' }).click();
  await page.getByRole('textbox', { name: 'Password*' }).fill('password');
  await page.getByRole('button', { name: 'Sign in' }).click();
  await page.getByRole('textbox', { name: 'Email address*' }).click();
  await page.getByRole('textbox', { name: 'Email address*' }).fill('test@example.com');
  await page.getByRole('textbox', { name: 'Email address*' }).press('Tab');
  await page.getByRole('button', { name: 'Show password' }).click();
  await page.getByRole('textbox', { name: 'Password*' }).click();
  await page.getByRole('button', { name: 'Sign in' }).click();
  await page.getByRole('button', { name: 'User menu' }).click();
  await page.getByRole('link', { name: 'Profile' }).click();
  await expect(page.getByRole('textbox', { name: 'Name*' })).toHaveValue('Test User');
});
